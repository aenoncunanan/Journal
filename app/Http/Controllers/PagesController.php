<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function home()
    {
        $data = array(
            'title' => 'Welcome To Journal',
            'blogs' => ['Blog1', 'Blog2', 'Blog3']
        );

        return view('pages.home')->with($data);
    }

    public function about()
    {
        $data = array(
            'title' => 'About',
            'developers' => ['Aenon Cunanan', 'Khal Bangcola', 'Karen Enriquez', 'Jhoyz Yonzon Mendoza', 'Kristian See Te']
        );

        return view('pages.about')->with($data);
    }
}
