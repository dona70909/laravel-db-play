<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller
{
    public  function index(){

        $movies = Movie::all();

        return view('guest.home.index',compact('movies'));
    }
}
