<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller {
    public function index() {
        helper(['form']);
        echo view('login');
    }

    public function auth() {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
    
        // Hardcoded credentials
        if ($username === 'admin' && $password === 'password123') {
            $session->set(['logged_in' => TRUE, 'username' => $username]);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('msg', 'Username atau Password salah');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}