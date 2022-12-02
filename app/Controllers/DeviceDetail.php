<?php

namespace App\Controllers;

class DeviceDetail extends BaseController {
    public function index() {
        $data = [
            'title' => 'List Barang'
        ];

        return view('pages/list', $data);
    }
    public function barang1() {
        $data =[
            'title' => 'Arduino'
        ];
        return view('pages/barang1', $data);
    }
    public function barang2() {
        $data =[
            'title' => 'Samsung'
        ];
        return view('pages/barang2', $data);
    }
    public function barang3() {
        $data =[
            'title' => 'Sonic'
        ];
        return view('pages/barang3', $data);
    }
}
?>