<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Store;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::with('store')->get();
        return view('admin.users.index', compact('users'));
    }

    public function detail($id)
    {
        $user = User::with('store')->findOrFail($id);
        return view('admin.users.detail', compact('user'));
    }
}
