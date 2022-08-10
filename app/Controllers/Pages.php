<?php

namespace App\Controllers;

class Pages extends BaseController {
    public function index(){
        $data = [
            'title' => 'Caka Architect Studio'
        ];

        return view('pages/home', $data);
    }
}