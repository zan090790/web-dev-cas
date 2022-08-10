<?php

namespace App\Controllers;

class Projects extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Projects'
        ];

        return view('pages/projects', $data);
    }
}
