<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;

class AdminController extends Controller
{
    public function index()
    {
        $fotos = Gallery::all();
        return view('admin',compact('fotos'));
    }
}
