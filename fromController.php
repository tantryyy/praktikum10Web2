<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fromController extends Controller
{
    public function index()
    {
        return view('from');
    }
    public function hasil(request $_REQUEST)
    {
        $this->validate ($_REQUEST, 
        [
            'nama' => 'required|min:5| max:20',
            'ttl' => 'required',
            'jenis_kelamin' => 'required', 
            'hobi' => 'required', 
        ]);
        return view('hasil', ['data' => $_REQUEST]);
    }
}
