<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Jenis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JenisController extends Controller
{
    public function index(Request $request)
    {
        $data = Jenis::listData();

        $response['status'] = 200;
        $response['success'] = true;
        $response['message'] = 'berhasil';
        $response['data'] = $data;
        return response()->json($response, 200);
    }
    public function detail($id)
    {
        $data = Jenis::getData($id);
        if ($data){
            $response['status'] = 200;
            $response['success'] = true;
            $response['message'] = 'berhasil';
            $response['data'] = $data;
        }else{
            $response['status'] = 400;
            $response['success'] = true;
            $response['message'] = 'gagal, jenis tidak ditemukan';
            $response['data'] = $data;
        }
        return response()->json($response, $response['status']);
    }
    public function hapus($id)
    {
        $hapus = Jenis::where('kode_jenis', $id)
            ->delete();
        if ($hapus){
            $response['status'] = 200;
            $response['success'] = true;
            $response['message'] = 'berhasil menghapus data';
        }else{
            $response['status'] = 400;
            $response['success'] = true;
            $response['message'] = 'gagal menghapus data';
        }
        return response()->json($response, $response['status']);
    }
    public function simpan(Request $request)
    {
        $simpan = Jenis::simpan($request);
        if (!$simpan){
            $response['status'] = 200;
            $response['success'] = true;
            $response['message'] = 'berhasil menyimpan data';
        }else{
            $response['status'] = 400;
            $response['success'] = true;
            $response['message'] = 'gagal menyimpan data';
        }
        return response()->json($response, $response['status']);
    }
    public function ubah(Request $request)
    {
        $update = Jenis::ubah($request);
        if (!$update){
            $response['status'] = 200;
            $response['success'] = true;
            $response['message'] = 'berhasil mengubah data';
        }else{
            $response['status'] = 400;
            $response['success'] = true;
            $response['message'] = 'gagal menyimpan data';
        }
        return response()->json($response, $response['status']);
    }
}
