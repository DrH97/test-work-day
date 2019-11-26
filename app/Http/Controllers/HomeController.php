<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $userPosts = Post::whereUserId(Auth::id())->get();

        return view('dashboard.dashboard', compact('userPosts'));
    }
}
