<?php

namespace Tests\Feature;

use App\Models\HandoffToken;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class HandoffTokensTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_handoff_token_can_be_created_and_used() {
        $this->seed();

        $user = User::factory()->create();

        $ceo_role = Role::where('name', '=', 'CEO')->first();

        $user->roles()->attach($ceo_role->id);

        $response = $this->actingAs($user)->get('/internal/handoff-token/vtcmanager/horizon/create');

        $response->assertRedirectContains('vtcmanager.eu/horizon?token=');

        // generate S2SC stuff, because we need it now
        $this->artisan('s2sc:generate')->assertSuccessful();

        parse_str(parse_url($response->headers->get('location'), PHP_URL_QUERY), $query);

        $response = $this->withHeaders([
            'S2SC-Token' => Cache::get('s2sc_token'),
            ])
            ->postJson('/api/s2sc/handoff-token/check', [
                'service' => 'vtcmanager',
                'tool' => 'horizon',
                'token' => $query['token'],
                'user_ip' => HandoffToken::first()->user_ip
            ]);

        $response->assertSuccessful();
    }

    public function test_handoff_token_can_not_be_used_with_invalid_data() {
        $this->seed();

        $user = User::factory()->create();

        $ceo_role = Role::where('name', '=', 'CEO')->first();

        $user->roles()->attach($ceo_role->id);

        $response = $this->actingAs($user)->get('/internal/handoff-token/vtcmanager/horizon/create');

        $response->assertRedirectContains('vtcmanager.eu/horizon?token=');

        // generate S2SC stuff, because we need it now
        $this->artisan('s2sc:generate')->assertSuccessful();

        parse_str(parse_url($response->headers->get('location'), PHP_URL_QUERY), $query);

        $response = $this->withHeaders([
            'S2SC-Token' => Cache::get('s2sc_token'),
        ])
            ->postJson('/api/s2sc/handoff-token/check', [
                'service' => 'vtcmanager',
                'tool' => 'horizon',
                'token' => $query['token'],
                'user_ip' => '60.172.228.216'
            ]);

        $response->assertUnauthorized();

        $response = $this->withHeaders([
            'S2SC-Token' => Cache::get('s2sc_token'),
        ])
            ->postJson('/api/s2sc/handoff-token/check', [
                'service' => 'vtcmanager2',
                'tool' => 'horizon3',
                'token' => $query['token'],
                'user_ip' => HandoffToken::first()->user_ip
            ]);

        $response->assertInvalid(['tool', 'service']);

        $response = $this->withHeaders([
            'S2SC-Token' => Cache::get('s2sc_token'),
        ])
            ->postJson('/api/s2sc/handoff-token/check', [
                'service' => 'vtcmanager',
                'tool' => 'horizon',
                'token' => 'b6e5b20b-0791-4cfb-b39e-cd3d8fa2ff79',
                'user_ip' => HandoffToken::first()->user_ip
            ]);

        $response->assertUnauthorized();

        // set creation time to 12 seconds ago to test the expiration
        $token = HandoffToken::first();
        $token->created_at = \Carbon\Carbon::now()->subSeconds(12);
        $token->save();

        $response = $this->withHeaders([
            'S2SC-Token' => Cache::get('s2sc_token'),
        ])
            ->postJson('/api/s2sc/handoff-token/check', [
                'service' => 'vtcmanager',
                'tool' => 'horizon',
                'token' => $query['token'],
                'user_ip' => HandoffToken::first()->user_ip
            ]);

        $response->assertUnauthorized();
    }
}
