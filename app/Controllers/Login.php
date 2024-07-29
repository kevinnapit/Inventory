<?php

// app/Controllers/LoginController.php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('web/register');
    }

    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();
        
        // Ambil input dari form
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        // Cari user berdasarkan username
        $user = $userModel->where('username', $username)->first();
        
        // Jika user ditemukan
        if($user){
            // Verifikasi password
            if(password_verify($password, $user['password'])){
                // Set session data
                $session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/dashboard'); // Redirect ke halaman dashboard
            } else {
                $session->setFlashdata('error', 'Invalid Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Username not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Menghapus semua data sesi
        
        // Set flashdata untuk pesan logout berhasil
        $session->setFlashdata('success', 'Anda berhasil logout');
        
        // Arahkan ke halaman login
        return redirect()->to('/login');
    }
    
}
