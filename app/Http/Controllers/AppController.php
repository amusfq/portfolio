<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Portfolio;
use App\Models\Me;


class AppController extends Controller
{
    public function index(Request $request) {
        $me = Me::get();
        $projects = Portfolio::latest('created_at')->limit(6)->get();
        return Inertia::render('Index', ['projects' => $projects, 'me' => $me]);
    }
}
