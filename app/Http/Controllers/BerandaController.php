<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //beranda
    public function index(){
        $produk = Product::latest()->paginate(5);
        return view('Front.beranda', compact('produk'));
    }
}