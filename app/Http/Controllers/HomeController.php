<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class HomeController extends Controller {

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id) {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home', [
            'tweets'=> auth()->user()->timeline()
        ]);
    }

}
