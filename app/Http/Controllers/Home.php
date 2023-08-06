<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopicAdd;

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
        $topics = TopicAdd::all();

        return view(
            'home.form',
            [
                "title" => "Ticket"
            ],
            compact('topics')
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
