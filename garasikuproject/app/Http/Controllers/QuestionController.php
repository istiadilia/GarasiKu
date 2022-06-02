<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;

class QuestionController extends Controller
{
    // public function index()
    // {
    //     return view('question', [
    //         "tittle" => "question",
    //         "question" => question::all()
    //     ]);
    // }

    public function show(question $question) {
        return view('answer', [
            "tittle" => "answer",
            "singleQuestion" => $question
        ]);
    }

    public function delete($id) {
        question::destroy($id);
        return redirect("/");
    }

}
