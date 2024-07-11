<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register()
    {
        $userModel = new UserModel();

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'gender'     => $this->request->getPost('gender'),
            'age'        => $this->request->getPost('age'),
        ];

        if ($userModel->insert($data)) {
            return redirect()->to('/login');
        } else {
            return redirect()->back()->withInput();
        }
    }
}
