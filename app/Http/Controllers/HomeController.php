<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = blog::get();
        return view('home', [
            'data' => $data,
        ]);
    }
}
