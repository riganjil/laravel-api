<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Jenis extends Model
{
    protected $table = 'jenis';

    public static function listData()
    {
        return Jenis::get();
    }
    public static function getData($id)
    {
        return Jenis::where('kode_jenis', $id)
            ->first();
    }
    public static function getNewCode()
    {
        return 'JNS'.rand(111,999).date('Ym');
    }
    public static function simpan(Request $request)
    {
        $simpan = new Jenis();
        $simpan->kode_jenis = self::getNewCode();
        $simpan->nama_jenis = $request->nama_jenis;
        $simpan->save();
    }
    public static function ubah(Request $request)
    {
        $update = Jenis::where('kode_jenis', $request->id)
            ->update([
               'nama_jenis' => $request->nama_jenis
            ]);
    }
}
