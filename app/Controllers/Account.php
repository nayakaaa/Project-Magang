<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function index()
    {
        $session = session();

        // Check if the user is logged in by verifying the 'logged_in' session data
        if ($session->get('logged_in')) {
            // If logged in, retrieve the username from session data
            $data = [
                'id' => $session->get('id'),
                'username' => $session->get('username'),
                'email' => $session->get('email'),
                'title' => 'Account',
            ];                                              
        } else {
            // If not logged in, use a default username
            $data = [
                'id' => '01',
                'username' => 'User',
                'email' => 'Tidak Ada Email',
                'title' => 'Account',
            ];
        }
        return view('page/account', $data);
    }
}
