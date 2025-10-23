<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    // public function __construct()
    // {
    //     if ((int)Session::get('id_role') !== 2 && (int)Session::get('id_role') !== 3) {
    //         Session::flash('msgOut', 'Akses ditolak atau halaman tidak ditemukan.');
    //         abort(404);
    //     }
    // }
    // -------------------------------------------------------------------------------------------------------------
    // Dashboard
    // -------------------------------------------------------------------------------------------------------------
    public function dashboard()
    {
        $data = [
            'title' => 'Main Dashboard | Template_Laravel12',
            'menu' => 'Content',
            'sub_menu' => 'Dashboard'
        ];
        return view('content.dashboard', $data);
    }
}
