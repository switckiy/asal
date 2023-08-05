<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {

        return view(
            'Admin.index'
        );
    }
    public function topic()
    {

        return view(
            'Admin.topic'
        );
    }
}
