<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios;
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
    public function login()
    {
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer'); 
        /*!  Tambien lo podemos encontrar como $_POST['usuario']; */
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new Usuarios();

        return view('auth/login', $data);
    }	
}