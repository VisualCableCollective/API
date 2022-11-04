<?php

namespace App\Http\Controllers\API\S2SC;

use App\Http\Controllers\Controller;
use App\Models\HandoffToken;
use Illuminate\Http\Request;

class HandoffTokenController extends Controller
{
    public function check($id, Request $request) {
        HandoffToken::where('id', '=', $id);
    }
}
