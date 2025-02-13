<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class GeneralPage extends Controller
{
function login()
    {
        return view('pages/login');
    }
function register()
    {
        return view('pages/register');
    }
function home()
    {
        return view('pages/home');
    }
function produk()
    {
        return view('pages/produk');
    }
function about()
    {
        return view('pages/about');
    }
function contact()
    {
        return view('pages/contact');
    }
}