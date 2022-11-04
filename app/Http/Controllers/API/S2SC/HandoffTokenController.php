<?php

namespace App\Http\Controllers\API\S2SC;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckHandoffTokenRequest;
use App\Models\HandoffToken;
use Carbon\Carbon;

class HandoffTokenController extends Controller
{
    public function check(CheckHandoffTokenRequest $request) {
        $req = $request->validated();

        $handoff_token = HandoffToken::where('id', '=', $req["token"])->where('is_used', '=', false)
            ->where('created_at', '>', Carbon::now()->subSeconds(10)->toDateTimeString())
            ->where('service', '=', $req["service"])->where('tool', '=', $req["tool"])
            ->where('user_ip', '=', $req["user_ip"])->first();

        if ($handoff_token != null) {
            return response()->noContent();
        }

        abort(401);
    }
}
