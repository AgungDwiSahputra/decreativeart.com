<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProcessControl extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/depanel');
        }

        return back()->withErrors([
            'email' => 'Email not found!',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /* Proses Portfolio */
    public function CreatePortfolio(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'jenis' => ['required'],
            'kategori' => ['required'],
            'file' => ['required'],
        ]);
        $ekstensi = $request->file('file')->getClientOriginalExtension();
        $namaFile = $request->kategori . '-' . now()->timestamp . '.' . $ekstensi;

        // Upload file ke storage internal
        $request->file('file')->storeAs('portfolio', $namaFile);

        // Masukan data ke database
        $Portfolio = new Portfolio;
        $Portfolio->nama = $request->nama;
        $Portfolio->keterangan = $request->keterangan;
        $Portfolio->jenis = $request->jenis;
        $Portfolio->kategori = $request->kategori;
        $Portfolio->file = $namaFile;
        $Portfolio->link = $request->link;

        if ($Portfolio->save()) {
            Session::flash('success', 'Portfolio Berhasil di Tambahkan');
        } else {
            Session::flash('failed', 'Portfolio Gagal di Tambahkan');
        }

        return redirect(route('AdminPortfolio'));
    }

    public function UpdatePortfolio(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'jenis' => ['required'],
            'kategori' => ['required'],
        ]);
        $Portfolio = Portfolio::findOrFail($id);
        if ($request->file == null) {
            $Portfolio->nama = $request->nama;
            $Portfolio->keterangan = $request->keterangan;
            $Portfolio->jenis = $request->jenis;
            $Portfolio->kategori = $request->kategori;
            $Portfolio->link = $request->link;
        } else {
            $ekstensi = $request->file('file')->getClientOriginalExtension();
            $namaFile = $request->kategori . '-' . now()->timestamp . '.' . $ekstensi;

            // Upload file ke storage internal
            $request->file('file')->storeAs('portfolio', $namaFile);
            // Hapus file sebelumnya
            Storage::disk('public')->delete('portfolio/' . $Portfolio->file);

            $Portfolio->nama = $request->nama;
            $Portfolio->keterangan = $request->keterangan;
            $Portfolio->jenis = $request->jenis;
            $Portfolio->kategori = $request->kategori;
            $Portfolio->file = $namaFile;
            $Portfolio->link = $request->link;
        }
        if ($Portfolio->save()) {
            Session::flash('success', 'Portfolio Berhasil di Update');
        } else {
            Session::flash('failde', 'Gagal Update Portfolio');
        }

        return redirect(route('AdminPortfolio'));
    }

    public function DeletePortfolio($id)
    {
        $delete = Portfolio::findOrFail($id);
        // dd($delete->file);

        if ($delete->delete()) {
            Storage::disk('public')->delete('portfolio/' . $delete->file);
            Session::flash('success', 'Portfolio Berhasil di Hapus');
        }

        return redirect(route('AdminPortfolio'));
    }
    /* End Proses Portfolio */
}
