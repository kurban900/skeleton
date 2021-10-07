<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;


class HomeController extends Controller
{
    public function index(): View
    {
        return view('public.home', []);
    }
}
