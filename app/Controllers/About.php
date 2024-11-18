<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $session = session();

        // Check if the user is logged in by verifying the 'logged_in' session data
        if ($session->get('logged_in')) {
            // If logged in, retrieve the username from session data
            $data = [
                'username' => $session->get('username'), // Retrieve 'username' from session
                'title' => 'About',
            ];
        } else {
            // If not logged in, use a default username
            $data = [
                'username' => 'User',
                'title' => 'About',
            ];
        }
        return view('page/aboutpage', $data);
    }
}
