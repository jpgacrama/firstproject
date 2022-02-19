<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = 'Welcome to my Laravel Course';
        $description = 'Created by Jonas';

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];
        
        return view('products.index')->with('data', $data);
    }

    public function about() {
        return 'About Us page';
    }

    public function show($id) {
        return $id;
    }
}
