<?php

namespace App\Http\Controllers\API\S2SC;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function show($id) {
        return User::findorfail($id);
    }
}
