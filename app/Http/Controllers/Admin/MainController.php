<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() 
    {
        $collection = [
            'lorem' => 'ipsum',
            'lorem2' => 'ipsum2',
            'lorem3' => 'ipsum3',
            'lorem4' => 'ipsum4',
            'lorem5' => 'ipsum5',
        ];
        return view('admin.index', compact('collection'));
    }
}
