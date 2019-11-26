<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
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

    /**
     * Show the user's profile.
     *
     * @return Renderable
     */
    public function showProfile()
    {
        $user = Auth::user();

        return view('dashboard.profile', compact('user'));
    }

    /**
     * Update the user's profile.
     *
     * @return Renderable
     */
    public function updateProfile(Request $request)
    {
//        $user = Auth::user();
//        $user->name =

        return redirect('dashboard/profile');
    }

    /**
     * Delete the user's profile.
     *
     * @return Renderable
     */
    public function deleteProfile()
    {
        $user = Auth::user();

        return redirect('/');
    }
}
