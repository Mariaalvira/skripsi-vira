<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class AdminController extends Controller
{
    public function index(){
        return view('content.admin.dashboard');
    }

    public function getBaptisAnak(){
        return view('content.admin.table.tabel_admin');
    }

    public function masuk(Request $kiriman){
        $admin = Admin::where([
            'username' => $kiriman->username,
            'password' => md5($kiriman->password)
        ])->get();

        if (count($admin)>0) {
            Auth::guard('admin')->loginUsingId($admin[0]['id_admin']);
            return redirect(URL('/admin'));
        }else {
            return redirect(URL('/login'));
        }
    }

    function keluar(){
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        return redirect('/');
    }
}