<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller {
    public function index() {
        helper(['form']);
        echo view('register');
    }

    public function store() {
        $model = new UserModel();
        
        // Validasi input
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]',
            'password' => 'required|min_length[6]',
            'email' => 'required|valid_email|is_unique[users.email]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->to('/register')->withInput()->with('errors', $validation->getErrors());
        }

        // Menyimpan data pengguna
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        $model->save($data);

        return redirect()->to('/login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }
}