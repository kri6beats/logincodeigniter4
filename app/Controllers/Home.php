<?php

namespace App\Controllers;

use App\Models\usuariosdb;

class Home extends BaseController{

    public function home()
    {
        $mensaje=session('mensaje');
        return view('login');
    }

    public function inicio()
    {
        return view('inicio');
    }

    public function login() 
    {
        $usuario=$this->request->getPost('user')  ;
        $password=$this->request->getPost('password');
        
        $usuarioModel=new usuariosdb();


        $datosUsuario=$usuarioModel->obtenerUsuarios(['user'=>$usuario]);
        
        if(count($datosUsuario) > 0 && password_verify($password,$datosUsuario[0]['password'])){
            $data=[
                "user"=>$datosUsuario[0]['user'],
                "type"=>$datosUsuario[0]['type']
            ];
            $session=session();
            $session->set($data);
            return redirect()->to(base_url('inicio'))->with('INICIO DE SESSION','1');
        }
        else{
            return redirect()->to(base_url(''))->with('NO SE ENCONTRO DATO','0');
        }
    }

    public function salir(){
        $session=session();
        $session->destroy();
       return redirect()->to(base_url(' '));  
    }

}