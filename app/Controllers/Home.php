<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function pruebauno(){
        return view('vamonos');
    }

    // public function acceso(){
    //     return view('acceso');
    // }
}
