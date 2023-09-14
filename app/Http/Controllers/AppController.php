<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AppController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('app/index');
    }

    /** Simple redirect function to redirect the user to the correct page based on their authentication status.
     * @return RedirectResponse
     */
    public function redirect(): RedirectResponse
    {
        if (auth()->check()) {
            return redirect()->route('app.index');
        } else {
            return redirect()->route('login');
        }
    }
}
