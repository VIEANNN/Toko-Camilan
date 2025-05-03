<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StatistikController;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan statistik
        return view('statistik.index');
    }
}
