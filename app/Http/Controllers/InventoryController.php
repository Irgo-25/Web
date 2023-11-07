<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    var $data;

    public function index(){
        $data = [
            'title' => 'Data Barang'
        ];
        return view('Data-Barang', $data);
    }
}
