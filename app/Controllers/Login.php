<?php

namespace App\Controllers;
use App\Models\loginModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function index()
    {   
        $session = session();

        // Check if the user is logged in by verifying the 'logged_in' session data
        if ($session->get('logged_in')) {
            // If logged in, retrieve the username from session data
            $data = [
                'username' => $session->get('username'), // Retrieve 'username' from session
                'title' => 'Login',
            ];
        } else {
            // If not logged in, use a default username
            $data = [
                'username' => 'User',
                'title' => 'Login',
            ];
        }
        return view('page/login', $data);
    }
    public function masuk()
    {
        $session = session();
        $loginModel = new loginModel();
        
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $user = $loginModel->where('email', $email)->first();
        
        if ($user && password_verify($password, $user['password'])) {
            $sessionData = [
                'id'       => $user['id'],
                'username' => $user['username'], // Store username in session
                'email'    => $user['email'],
                'logged_in'=> TRUE
            ];
            $session->set($sessionData);
            return redirect()->to('/Home'); // Redirect to the dashboard
        } else {
            $session->setFlashdata('error', 'Email or password is incorrect.');
            return redirect()->back();
        }
    }



    // Fungsi untuk logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/Home'));
    }

    
}
