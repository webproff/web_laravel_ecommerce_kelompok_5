<?php

namespace App\Http\Controllers;
use App\Models\poster;
use App\Models\category;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return view('archon', [
            'title' => 'archon',
            'archon' => poster::latest()->filter(request(['search']))->get(),
        ]);
    }
    
    public function show(poster $poster)
    {
        return view('partial/postgoblog', [
            'title' => 'singlepost',
            'post' => $poster
        ]);
    }
}