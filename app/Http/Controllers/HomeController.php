<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Moto;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motos = Moto::where('available', 1)
            ->with('images')
            ->with('category')
            ->get();

        return view('index', [
            'motos' => $motos,
        ]);
    }

    public function getCategory()
    {
        $categories = Category::all();

        return $categories;
    }

    public function getMotoByCategorySlug($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $motos = Moto::with(['category' => function($query) use ($slug) {
            $query->where('slug', $slug);
        }])
        ->wherehas('category', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->with('images')
        ->paginate(12);

        return view('home.list', [
            'category' => $category,
            'motos' => $motos,
        ]);
    }

    public function getMotoBySlug($slug)
    {
        $moto = Moto::where('slug', $slug)->with('images')->first();

        return view('home.detail', [
            'moto' => $moto,
        ]);
    }

    public function search(Request $request)
    {
        $name = $request->s;
        $motos = Moto::where('name', 'like', '%' . $name . '%')->with('images')->with('category')->paginate(12);
        
        return view('home.search', [
            'motos' => $motos,
        ]);
    }
}
