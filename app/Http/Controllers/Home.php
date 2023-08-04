<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {

        return view(
            'home.index',
            [
                "title" => "Home"
            ]
        );
    }
    public function form()
    {

        return view(
            'home.form',
            [
                "title" => "Ticket"
            ]
        );
    }
    public function faq()
    {

        return view(
            'home.faq',
            [
                "title" => "Faq"
            ]
        );
    }
}
