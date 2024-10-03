<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns', // atau bisa diubah ke 'email'
            'password' => 'required|min:8|max:15',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Pastikan semua email dan password terisi dengan benar!');
            return redirect()->back();
        }

        // Login admin
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            Alert::toast('Selamat datang admin!', 'success');
            return redirect()->route('admin.dashboard');
        }
        // Login user biasa
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Alert::toast('Selamat datang!', 'success');
            return redirect()->route('user.dashboard');
        }
        // Gagal login
        else {
            Alert::error('Login Gagal!', 'Email atau password tidak valid!');
            return redirect()->back();
        }
    }

    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        Alert::toast('Berhasil logout!', 'success');
        return redirect('/');
    }

    public function user_logout()
    {
        Auth::logout();
        Alert::toast('Berhasil logout!', 'success');
        return redirect('/');
    }
}
