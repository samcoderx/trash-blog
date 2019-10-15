<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'Welcome to  Trash Blog ';
        // return view('pages.index', compact('hello'));
         return view('pages.index')->with('title',$title);

    }
    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title',$title);
    }
    public function service(){
        $data = [
            'title' => 'Trash Blog Services!',
            'services' => ['Web Design', 'Programming', 'Marketing'],
    ];
        return view('pages.service')->with($data);
    }
}
