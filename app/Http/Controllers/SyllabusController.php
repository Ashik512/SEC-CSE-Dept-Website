<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function syllabus()
    {
    	return view('pages.syllabus');
    }
}
