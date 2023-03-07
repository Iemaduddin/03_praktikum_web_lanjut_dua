<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Iemaduddin')
            ->with('short_name', 'Didin')
            ->with('nim', '2141720055')
            ->with('absen', '14')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'iemaduddin17@gmail.com')
            ->with('nohp', '082331311947')
            ->with('ig', '@didinn_id');
    }
}
