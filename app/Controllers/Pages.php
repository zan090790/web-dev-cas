<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Caka Architect Studio'
        ];

        return view('pages/home', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];

        return view('pages/contact', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('pages/about', $data);
    }

    public function pricingAndProcedure()
    {
        $data = [
            'title' => 'Pricing & Procedure'
        ];

        return view('pages/pricing_and_procedure', $data);
    }
}
