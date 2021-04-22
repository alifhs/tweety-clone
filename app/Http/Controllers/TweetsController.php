<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetsController extends Controller
{
    //

    public function index()
    {
       
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }
    public function store() {

        $attributes = request()->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

          return redirect()->route('home');
    }
}
