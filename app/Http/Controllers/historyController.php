<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historyController extends Controller
{
    public function show()
    {
        return view('history', [
            'user' => '(´；ω；｀)'
        ]);
    }
}
