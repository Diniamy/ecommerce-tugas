<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class ListController
{
    public function index()
    {
        $admins = Admin::all();
        $user = User::all();

        return view('welcome', compact('admins', 'users'));
    }
}
