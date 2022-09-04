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

    public function project_detail()
    {
        $data = [
            'title' => 'Project Detail'
        ];

        return view('pages/project_detail', $data);
    }
}
