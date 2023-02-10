<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PengaduanController extends Controller
{

    public function index()
    {
        return view('pengaduan.index');
    }

    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {

        // $file = Storage::putFile('avatars', $request->file('foto'));

        // dd($request->file('foto'));
        // $path = $request->file('foto')->store('public/foto');
        // $validator = $request->validate([
        //     'tgl_pengaduan' => 'required|date',
        //     'nik'           => 'required|string',
        //     'isi_laporan'   => 'required|string',
        //     'foto'          => 'required|string',
        //     'status'        => 'required',
        // ]);

        $foto = $request->file('foto');
        // dd($foto);
        $uploadImage = time() . '_' . $foto->getClientOriginalName();
        $foto->move('images', $uploadImage);

        // $ext    = $request->foto->getClientOriginalExtension();
        // $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        // $request->foto->storeAS('public/foto',$file);

        // $pengaduan = new Pengaduan;
        // $pengaduan->tgl_pengaduan   = Carbon::now();
        // // dd($pengaduan->tgl_pengaduan);
        // $pengaduan->nik             = $request->nik;
        // $pengaduan->isi_laporan     = $request->isi_laporan;
        // $pengaduan->foto            = $request->file('foto')->getClientOriginalName();
        // $pengaduan->status          = $request->status;

        // $pengaduan->save();

        return redirect()->route('pengaduan.index');
    }
}

//123432820