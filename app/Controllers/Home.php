<?php

namespace App\Controllers;
use App\Models\editModel;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        // Check if the user is logged in by verifying the 'logged_in' session data
        if ($session->get('logged_in')) {
            // If logged in, retrieve the username from session data
            $data = [
                'username' => $session->get('username'), // Retrieve 'username' from session
                'title' => 'Home',
            ];
        } else {
            // If not logged in, use a default username
            $data = [
                'username' => 'User',
                'title' => 'Home',
            ];
        }
        return view('page/homepage', $data);
    }
    public function admin()
    {
        $session = session();

        // Check if the user is logged in by verifying the 'logged_in' session data
        if ($session->get('logged_in')) {
            // If logged in, retrieve the username from session data
            $data = [
                'username' => $session->get('username'), // Retrieve 'username' from session
                'title' => 'Admin',
            ];
        } else {
            // If not logged in, use a default username
            $data = [
                'username' => 'User',
                'title' => 'Admin',
            ];
        }
        return view('page/adminpage', $data);
    }
    public function akun(){
        $session = session();
        if ($session->get('logged_in')) {
            return redirect()->to(base_url('/Account'));
        }else{
            return redirect()->to(base_url('/Login'));
        }
    }
    public function changepass(){
        $session = session();

        // Check if the user is logged in by verifying the 'logged_in' session data
        if ($session->get('logged_in')) {
            // If logged in, retrieve the username from session data
            $data = [
                'id' => $session->get('id'),
                'username' => $session->get('username'),
                'email' => $session->get('email'),
                'title' => 'Change Password',
            ];
        } else {
            // If not logged in, use a default username
            $data = [
                'id' => '01',
                'username' => 'User',
                'email' => 'Tidak Ada Email',
                'title' => 'Change Password',
            ];
        }
        return view('/page/changepass', $data);
    }
    public function gantipassword(){
        $session = session();
        $editModel = new editModel();

        $id = $this->request->getPost('id');
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $repassword = $this->request->getPost('re-password');


            if ($password == $repassword) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
                // Prepare data to insert into the database
                $data = [
                    'password'  => $hashedPassword,
                ];
                
                $editModel->update($id, $data);
    
                // Redirect to the home page after successful signup
                return redirect()->to(base_url('/Home'));
            }else {
                $session->setFlashdata('error', 'Password baru tidak sama');
                return redirect()->back();
            }
    }
}
