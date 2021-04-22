<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExploreController extends Controller
{
    //
    public function index() {
        

        return view('explore',
            ['users' => User::paginate(50)]
         );
    }
}
