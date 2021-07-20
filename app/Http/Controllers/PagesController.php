<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $res = Restaurants::latest()->get();
        return view('home', compact('res'));
    }
    public function chefs()
    {
        $chefs = Restaurants::latest()->paginate(9);
        return view('chefs', compact('chefs'));
    }
}
