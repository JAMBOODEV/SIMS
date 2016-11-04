<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Siswa;
use App\Http\Controllers\Controller;

class ElearningController extends Controller
{
    public function read () {

    	// var_dump('expression'); exit();

    	// $siswa=siswa::all();
    	// $siswa=siswa::find(array('name' => $input['name']));

    	return view ('siswa/elearning', ['SiswaS'=>$Siswa]);
    }
}
