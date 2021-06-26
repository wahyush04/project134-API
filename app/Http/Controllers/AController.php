<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class AController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
//        dd($exams);
        return view('exam.index', compact('exams'));
    }

    public function create()
    {
        return view('exam.add');
    }

    public function store(Request $request)
    {
        Exam::create($request->all());
        return redirect('kelompoka');
    }
}
