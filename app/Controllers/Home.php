<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index(){
        $data=[
            'title' => 'Home | HALLO'
        ];
        return view('pages/home', $data);
    }
}