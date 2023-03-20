<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', 0)->get();
        return view('admin.users', compact('users'));
    }
}
