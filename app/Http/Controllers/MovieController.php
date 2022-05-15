<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Movie;
class MovieController extends Controller
{
    public  function index(){

        $movies = Movie::all();
        //$movies= ["ci","sad"];
        //$movies = collect(Http::get(Movie::all())->json()['results']);

        return view('guest.home.index',compact('movies'));
    }
}
