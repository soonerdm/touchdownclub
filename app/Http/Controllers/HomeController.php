<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redriver;

class HomeController extends Controller
{
     public function index()
        {
           $redrivers = Redriver::where('active', true)->get();
              return view('home', compact('redrivers'));
        }
}
