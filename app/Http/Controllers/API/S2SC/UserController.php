<?php

namespace App\Http\Controllers\API\S2SC;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function show($id) {
        $response = [];
        $response["success"] = true;

        $response["data"] = User::findOr($id, function() use (&$response) {
            $response["success"] = false;
        });

        return $response;
    }
}
