<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class S2SCTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_token_can_be_generated()
    {
        User::factory()->create();

        $this->artisan('s2sc:generate')->assertSuccessful();

        $this->assertNotEmpty(Cache::get('s2sc_token'));
    }

    public function test_user_data_can_be_retrieved() {
        User::factory()->create();

        $this->artisan('s2sc:generate')->assertSuccessful();

        $response = $this->withHeaders([
            'S2SC-Token' => Cache::get('s2sc_token'),
        ])->get('/api/s2sc/user/1');

        $this->assertEquals(true, $response->json()["success"]);
    }
}
