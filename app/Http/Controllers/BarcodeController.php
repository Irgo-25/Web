<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function index(){
        $data = [
            'title'=>'Barcode'
        ];
        return view('Barcode', $data);
    }
}
