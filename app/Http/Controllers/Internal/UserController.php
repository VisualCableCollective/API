<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(15);
        return view('internal.user.index', ['users' => $users]);
    }
}
