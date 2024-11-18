<?php

namespace App\Controllers;
use App\Models\signupModel;
use CodeIgniter\Controller;

class Signup extends BaseController
{
    public function index()
    {   
        $session = session();

        // Check if the user is logged in by verifying the 'logged_in' session data
        if ($session->get('logged_in')) {
            // If logged in, retrieve the username from session data
            $data = [
                'username' => $session->get('username'), // Retrieve 'username' from session
                'title' => 'Signup',
            ];
        } else {
            // If not logged in, use a default username
            $data = [
                'username' => 'User',
                'title' => 'Signup',
            ];
        }
        return view('page/signup', $data);
    }
    public function daftar()
    {
        $signupModel = new signupModel();
        
        // Get the user input
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $picture = $this->request->getFile('picture');
        
        // Hash the password using password_hash
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare data to insert into the database
        $data = [
            'email'    => $email,
            'username' => $username,
            'password' => $hashedPassword,
            'picture' => $picture,
        ];
        
        // Save data to the database
        $signupModel->insert($data);

        // Redirect to the home page after successful signup
        return redirect()->to(base_url('/Home'));
    }
    public function insertGambar(){
        $session = session();
        $editModel = new editModel();

        $id = $this->request->getPost('id');
        $picture = $this->request->getFile('picture');

            if ($id > 0) {
                $newName = $picture->getRandomName();
                $picture->move(WRITEPATH .'Image', $newName);
                // Prepare data to insert into the database
                $data = [
                    'picture'  => $newName,
                ];
                
                $editModel->update($id, $data);
    
                // Redirect to the home page after successful signup
                return redirect()->to(base_url('/Home'));
            }else {
                $session->setFlashdata('error', 'Tidak Bisa Mengupload Gambar');
                return redirect()->back();
            }
    }


}
