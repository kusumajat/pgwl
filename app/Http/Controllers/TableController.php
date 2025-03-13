<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Table',
        ];

        return view('table', $data);
    }
}
