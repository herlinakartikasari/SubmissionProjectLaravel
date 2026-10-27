<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public functionindex() {
        return view ('products.index');
    }
}