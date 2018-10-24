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
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('pages.home')->with('posts', $posts);
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
