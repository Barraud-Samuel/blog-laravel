<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel';
        //return view('pages.index');
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
          'title' => 'services',
          'services' => ['web Design', 'dev', 'seo']
        );
        return view('pages.services')->with($data);
    }
}
