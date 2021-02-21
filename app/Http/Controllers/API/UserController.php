<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function show($id){
        return User::select(['username','first_name','id'])->findorfail($id);
    }
}
