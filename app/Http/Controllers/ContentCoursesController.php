<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class ContentCoursesController extends Controller
{
    //
    public function saveContent(Request $request){
        $request->validate([
            'body'=>'required'
        ]);
        Course::create([
            'body'
        ]);
    }
}
