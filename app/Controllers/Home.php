<?php
namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\UserModel;

class Home extends Controller
{
    public function index(){
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        return view('auth/login', $data);
    }
    public function inicio()
    {
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer'); 
        return view('inicio', $data);
    }
}