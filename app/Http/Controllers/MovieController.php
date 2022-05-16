<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Movie;
class MovieController extends Controller
{
    public  function index(){

        //$movies = Movie::orderBy('id','asc')->paginate(10);
        $movies = Movie::all();
        return view('guest.home.index',compact('movies'));
    }

   /*  public function index(){
        $users = User::paginate(10);
       return response()->json($users);
    } */

    public function insert(Request $request){

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->language = $request->language;
        $movie->vote = $request->vote; 
        $movie->cover = $request->cover;
        
        $movie->save();

        return redirect('/')->with('status', 'Content Has Been inserted');
    }

    public static function show() {
        return view('guest.home.show');
    }
}
