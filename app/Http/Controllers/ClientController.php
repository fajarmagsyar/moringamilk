<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function beranda()
    {
        return view('client.beranda', [
            'title' => 'Beranda',
        ]);
    }
    public function zscore()
    {
        return view('client.zscore', [
            'title' => 'Z-Score Index',
        ]);
    }
    public function massaTubuh()
    {
        return view('client.bmi', [
            'title' => 'Indeks Massa Tubuh',
        ]);
    }
}
