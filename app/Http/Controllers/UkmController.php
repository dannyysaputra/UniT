<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Ukm;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function registUkm()
    {
        return view('ukm.auth.register');
    }

    public function loginUkm()
    {
        return view('ukm.auth.login');
    }

    public function createUkm(Request $request)
    {
        $validated = $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|email|unique:ukms',
                'password' => 'required|min:8|same:confirm-password',
                'confirm-password' => 'required|min:8',
                'deskripsi' => 'required',
                'visi' => 'required',
                'misi' => 'required',
                'logo' => 'image',
                'link_grup' => 'required',
                'pengesahan' => 'image',
                'ava_pengurus.*' => 'image',
                'nama_pengurus.*' => 'required',
                'jabatan_pengurus.*' => 'required',
                'jurusan_pengurus.*' => 'required',
                
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.unique' => 'Email sudah terdaftar',
                'password.same' => 'Konfirmasi password tidak sesuai',
                'deskripsi.required' => 'deskripsi tidak boleh kosong',
                'visi.required' => 'visi tidak boleh kosong',
                'misi.required' => 'misi tidak boleh kosong',
                'logo.required' => 'logo tidak boleh kosong',
                'link_grup.required' => 'Link grup tidak boleh kosong',
                'pengesahan.required' => 'pengesahan tidak boleh kosong',
                'ava_pengurus.required' => 'Avatar tidak boleh kosong',
                'nama_pengurus.required' => 'Nama tidak boleh kosong',
                'jabatan_pengurus.required' => 'Jabatan tidak boleh kosong',
                'jurusan_pengurus.required' => 'Jurusan tidak boleh kosong',
            ]
        );

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $logoPath = str_replace('public/', 'storage/', $logoPath);
        } else {
            $logoPath = null;
        }

        if ($request->hasFile('pengesahan')) {
            $pengesahanPath = $request->file('pengesahan')->store('public/pengesahans');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $pengesahanPath = str_replace('public/', 'storage/', $pengesahanPath);
        } else {
            $pengesahanPath = null;
        }

        $ukm = new Ukm([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'deskripsi' => $validated['deskripsi'],
            'visi' => $validated['visi'],
            'misi' => $validated['misi'],
            'logo' => $logoPath,
            'link_grup' => $validated['link_grup'],
            'pengesahan' => $pengesahanPath
        ]);

        // foreach ($request->nama_pengurus_utama as $key => $namaPengurus) {
        //     $pengurus = new Pengurus();
        //     $pengurus->nama = $namaPengurus;
        //     $pengurus->jabatan = $request->jabatan_pengurus_utama[$key];
        //     $pengurus->jurusan = $request->jurusan_pengurus_utama[$key];

        //     if ($request->hasFile('ava_pengurus_utama') && isset($request->ava_pengurus_utama[$key])) {
        //         $avatarPath = $request->file('ava_pengurus_utama')[$key]->store('public/avatars');
        //         $avatarPath = str_replace('public/', 'storage/', $avatarPath);
        //         $pengurus->avatar = $avatarPath;
        //     } else {
        //         $pengurus->avatar = null;
        //     }

        //     $ukm->penguruses()->save($pengurus);
        // }

        // $ukm->save();
        dd($request->all());

        return redirect('/login-ukm')->with('success', 'Daftar akun berhasil. Silahkan login!');
    }

    public function createPengurus(Request $request)
    {
        $validated = $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|email|unique:ukms',
                'password' => 'required|min:8|same:confirm-password',
                'confirm-password' => 'required|min:8',
                'deskripsi' => 'required',
                'visi' => 'required',
                'misi' => 'required',
                'logo' => 'image',
                'link_grup' => 'required',
                'pengesahan' => 'image',
                'ava_pengurus.*' => 'image',
                'nama_pengurus.*' => 'required',
                'jabatan_pengurus.*' => 'required',
                'jurusan_pengurus.*' => 'required',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.unique' => 'Email sudah terdaftar',
                'password.same' => 'Konfirmasi password tidak sesuai',
                'deskripsi.required' => 'deskripsi tidak boleh kosong',
                'visi.required' => 'visi tidak boleh kosong',
                'misi.required' => 'misi tidak boleh kosong',
                'logo.required' => 'logo tidak boleh kosong',
                'link_grup.required' => 'Link grup tidak boleh kosong',
                'pengesahan.required' => 'pengesahan tidak boleh kosong',
                'ava_pengurus.required' => 'Avatar tidak boleh kosong',
                'nama_pengurus.required' => 'Nama tidak boleh kosong',
                'jabatan_pengurus.required' => 'Jabatan tidak boleh kosong',
                'jurusan_pengurus.required' => 'Jurusan tidak boleh kosong',
            ]
        );

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $logoPath = str_replace('public/', 'storage/', $logoPath);
        } else {
            $logoPath = null;
        }

        if ($request->hasFile('pengesahan')) {
            $pengesahanPath = $request->file('pengesahan')->store('public/pengesahans');
            // Ubah path agar sesuai dengan link yang dapat diakses secara publik
            $pengesahanPath = str_replace('public/', 'storage/', $pengesahanPath);
        } else {
            $pengesahanPath = null;
        }

        $ukm = new Ukm([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'deskripsi' => $validated['deskripsi'],
            'visi' => $validated['visi'],
            'misi' => $validated['misi'],
            'logo' => $logoPath,
            'link_grup' => $validated['link_grup'],
            'pengesahan' => $pengesahanPath
        ]);

        foreach ($request->nama_pengurus as $key => $namaPengurus) {
            $pengurus = new Pengurus();
            $pengurus->nama = $namaPengurus;
            $pengurus->jabatan = $request->jabatan_pengurus[$key];
            $pengurus->jurusan = $request->jurusan_pengurus[$key];

            if ($request->hasFile('ava_pengurus') && isset($request->ava_pengurus[$key])) {
                $avatarPath = $request->file('ava_pengurus')[$key]->store('public/avatars');
                $avatarPath = str_replace('public/', 'storage/', $avatarPath);
                $pengurus->avatar = $avatarPath;
            }

            $ukm->penguruses()->save($pengurus);
        }

        // $ukm->save();
        dd($pengurus);

        return redirect('/login-ukm')->with('success', 'Daftar akun berhasil. Silahkan login!');
    }
}
