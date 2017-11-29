<?php

namespace App\Http\Controllers;

use App\Jenis;
use Illuminate\Http\Request;

use App\Http\Requests;

class JenisController extends Controller
{
    public function index(Request $request)
    {
        $data = Jenis::listData();
        return view('pages.jenis.index', compact('data'));
    }
    public function detail($id)
    {
        $data = Jenis::getData($id);
        return view('pages.jenis.detail', compact('data'));
    }
    public function tambah()
    {
        return view('pages.jenis.tambah');
    }
    public function hapus($id)
    {
        $hapus = Jenis::where('kode_jenis', $id)
            ->delete();
        return redirect('jenis');
    }
    public function simpan(Request $request)
    {
        $simpan = Jenis::simpan($request);
        return redirect('jenis');
    }
    public function ubah(Request $request)
    {
        $update = Jenis::ubah($request);
        return redirect('jenis');
    }
}
