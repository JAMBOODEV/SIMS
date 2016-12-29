<?php

namespace App\Http\Controllers;

use Closure;

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

    public function test(Closure $stdClass, array $arr, ... $null)
    {
    	return $stdClass(); // Closure

    	Start::menu("bootstrap-theme", function () use ($user) {
    		$user->authenticated;
    	});

    	Collection::init();

    	Collection::form(['class' => 'form-control', 'action' => url('form')])
    				->text('username')
    				->hidden('token', csrf_token())
    				->submit('Login')
    				->render();
    }


}
