<?php

namespace App\Http\Controllers;

use App\Filters\UserFilter;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserFilter $filter)
    {
//        $users = User::filter($filter)->get();
        $users = User::all();

        return view('user', compact('users'));
    }
    public function request(Request $request)
    {
        dd(\Illuminate\Support\Facades\Request::capture());
    }
}
