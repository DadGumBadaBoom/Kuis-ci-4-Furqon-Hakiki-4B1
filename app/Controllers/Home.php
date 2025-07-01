<?php

namespace App\Controllers;

use App\Models\Usermodel;

class Home extends BaseController
{
    public function index()
    {
        $model = new Usermodel();
        $data['users'] = $model->getAll(); #dari 'getall' menjadi 'getAll()'
        return view('user', $data); #kurang syntax ';'
    }

    public function tambah()
    {
        if($this->request->getMethod() === 'POST'){
            $userModel = new Usermodel(); #dari 'usermodel' menjadi 'Usermodel()'
            $userModel->insert([
                'name' => $this->request->getPost('nama'),
                'email' => $this->request->getVar('email'), #dari 'getVar' menjadi 'getPost'
                'created_at' => date('Y-m-d')
            ]);
            return redirect()->to('/');
        }
        echo view('form');
    }
}