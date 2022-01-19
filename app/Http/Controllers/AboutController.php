<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About our website';
        $paragraph = 'Information regarding our website will be listed here';

        $topics = [
            [
                'title' => 'Tips and Tricks',
                'maxUsers' => '15'
            ],
            [
                'title' => 'Experience',
                'maxUsers' => '30'
            ]
        ];

        return view('about', compact('title', 'paragraph', 'topics'));
    }
}
