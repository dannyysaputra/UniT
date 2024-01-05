<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        return view('mahasiswa.dashboard');
    }

    public function viewUkm() {
        return view('mahasiswa.ukm');
    }

    public function viewEvent() {
        return view('mahasiswa.event');
    }
}
