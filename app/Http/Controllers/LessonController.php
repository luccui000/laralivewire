<?php

namespace App\Http\Controllers;

use App\Filters\LessonFilter;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(LessonFilter $filter)
    {
        $lessons = Lesson::filter($filter)->get();
        return response()->json($lessons);
    }
}
