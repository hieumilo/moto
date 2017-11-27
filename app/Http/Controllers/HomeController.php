<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getCategory()
    {
        $categories = Category::all();

        return $categories;
    }

    public function getMotoByCategorySlug($slug)
    {
        return view('home.list');
    }

    public function getMotoBySlug($slug)
    {
        return view('home.detail');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
