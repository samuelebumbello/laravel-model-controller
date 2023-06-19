<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class MyPageController extends Controller
{
    public function index(){
        return view('home');
    }


    public function movies(){

        $movies = Movie::all();

        return view('movies' , compact('movies'));
    }


    public function movie_detail($slug){

        $movie = Movie::where('slug' , $slug)->first();

        return view('movie_detail' , compact('movie'));
    }
}
