<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

        $posts = [];

        for ($i=0; $i < 5; $i++) {
            $posts[] = [
                'id' => $i,
                'title' => 'This is the Title',
                'message' => 'There is the message...'
            ];
        }

        return view('welcome', [
            'posts' => $posts
        ]);
    }

    public function about(){
        return view('about');
    }
}
