<?php

namespace App\Controllers\Portal;
use App\Controllers\BaseController;


class Home extends BaseController
{

    public function index()
    {
        return view('index.php');
    }
    
    public function juegosd()
    {
        return view('portal/JuegosD.php');
    }

    public function juegospd()
    {
        return view('portal/JuegosPD.php');
    }
    
    public function contact()
    {
        return view('portal/contact.php');
    }

    public function about()
    {
        return view('portal/about.php');
    }

    public function acceso(){
        return view('user/login.php');
    }
}
