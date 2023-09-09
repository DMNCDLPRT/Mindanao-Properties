<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
           // Check if the user is authenticated
        if (auth()->check()) {
            // If authenticated, redirect to the 'dashboard' route
            return redirect()->route('dashboard');
        }

        // If not authenticated, you can handle this case differently, e.g., display a welcome page
        return view('welcome');
    }

    public function logout(Request $request)
    {
        // Perform the logout action
        auth()->logout();

        // Redirect to the welcome page or any other desired page
        return redirect('/');
    }

    public function siteControl() {
        return view('welcome');
    }
}