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
            'title' => 'Main Dashboard | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Dashboard'
        ];
        return view('content.dashboard', $data);
    }
    public function masterMerek(){
        $data = [
            'title' => 'Master Merek | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('master.masterMerek', $data);
    }
    public function masterKategori(){
        $data = [
            'title' => 'Master Kategori | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('master.masterKategori', $data);
    }
    public function masterBarang(){
        $data = [
            'title' => 'Master Barang | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('master.masterBarang', $data);
    }
    public function masterPengguna(){
        $data = [
            'title' => 'Master Pengguna | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('master.masterPengguna', $data);
    }

    public function transaksiMasuk(){
        $data = [
            'title' => 'Barang Masuk | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('transaksi.barangMasuk', $data);
    }
    public function transaksiKeluar(){
        $data = [
            'title' => 'Barang Keluar | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('transaksi.barangKeluar', $data);
    }

    public function laporanMasuk(){
        $data = [
            'title' => 'Laporan Barang Masuk | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('laporan.laporanMasuk', $data);
    }

    public function laporanKeluar(){
        $data = [
            'title' => 'Laporan Barang Keluar | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('laporan.laporanKeluar', $data);
    }

    public function laporanStokBarang(){
        $data = [
            'title' => 'Laporan Stok Barang | GI-Jarum',
            'menu' => 'Content',
            'sub_menu' => 'Merek'
        ];
        return view('laporan.laporanStokBarang', $data);
    }
    
}
