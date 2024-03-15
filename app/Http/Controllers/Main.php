<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index()
    {
        echo 'gestor de tivos';
    }

    public function login(){
        $data = [
            'title' =>'login'
         
        ];

        return view('login_frm', $data);
    }

    public function login_submit()
    {
        echo 'Submissão do login';

    }

}
