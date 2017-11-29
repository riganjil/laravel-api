<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Auth;
use Hash;

use App\Http\Requests;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }
    public function aksiLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if(Auth::attempt(['username' => $username, 'password' => $password])){
            return redirect('jenis');
        }else{
            return redirect('auth/login');
        }
    }
    public function register()
    {
        return view('pages.auth.register');
    }
    public function aksiRegister(Request $request)
    {
        $cek = User::where('username', $request->username)->first();
        if ($cek) {
            return 'username sudah ada';
        }else{
            $simpan = new User();
            $simpan->kode_user = User::getNewCode();
            $simpan->nama = $request->nama;
            $simpan->username = $request->username;
            $simpan->email = $request->email;
            $simpan->telepon = $request->telepon;
            $simpan->password = Hash::make($request->password);
            $simpan->save();
            return 'registrasi berhasil';
        }
    }
}
