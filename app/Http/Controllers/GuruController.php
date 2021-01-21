<?php

namespace App\Http\Controllers;

use App\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index()
    {
        $guru = GuruModel::latest()->get();
        return view('guru/index', compact('guru'));
    }
}
