<?php

namespace App\Controllers;

class Device extends BaseController{
    public function index(){   
        $data=[
            'title' => 'Daftar Device',
            'device' => [
                [
                    'id' => 1,
                    'gambar' => '<img src = "/genuino.jfif" width="100" height = "100">',
                    'nama' => 'Arduino',
                    'merek' => 'Genuino',
                    'jumlah' => 10,
                    'status' => 1,
                    'detail' => '<a href = "/pages/barang1"> Detail </a>'
                ],
                [
                    'id' => 2,
                    'gambar' => '<img src = "/samsung.jfif" width="100" height = "100">',
                    'nama' => 'Monitor',
                    'merek' => 'Samsung',
                    'jumlah' => 15,
                    'status' => 1,
                    'detail' => '<a href = "/pages/barang2"> Detail </a>'
                ],
                [
                    'id' => 3,
                    'gambar' => '<img src = "/canon.jfif" width="100" height = "100">',
                    'nama' => 'Projector',
                    'merek' => 'Sonic',
                    'jumlah' => 5,
                    'status' => 0,
                    'detail' => '<a href = "/pages/barang3"> Detail </a>'
                ]
            ]
        ];
        return view('pages/device', $data);
    }
}