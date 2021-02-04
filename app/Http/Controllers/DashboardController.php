<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function profil()
    {
        return view('dashboard.profil');
    }

    public function profilEdit($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.profil_edit', compact('user'));
    }
}
