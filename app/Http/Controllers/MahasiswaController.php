<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ukm;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $ukms = Ukm::all();

        return view('mahasiswa.dashboard', ['ukms' => $ukms]);
    }

    public function viewUkm()
    {
        $ukms = Ukm::all();

        return view('mahasiswa.ukm', ['ukms' => $ukms]);
    }

    public function viewEvent()
    {
        $events = Event::all()->where('status', 'Approved');

        return view('mahasiswa.event', ['events' => $events]);
    }

    public function detailUkm($id)
    {
        $ukm = Ukm::find($id);
        $penguruses = $ukm->penguruses;

        return view('mahasiswa.detail-ukm', [
            'ukm' => $ukm,
            'penguruses' => $penguruses
        ]);
    }
}
