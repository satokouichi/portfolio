<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('web.top', []);
    }
}