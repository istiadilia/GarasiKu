<?php

namespace App\Http\Controllers;

use App\Models\answer;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AnswerController extends Controller
{
    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'ans_body' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('message', 'komen mandatory');
        }
        $quest = question::where('slug', $request->quest_slug)->first();
        if ($quest) {
            answer::create([
                'question_id' => $quest->id,
                'user_id' => Auth::user()->id,
                'ans_body' => $request->ans_body
            ]);
            return redirect()->back();
        }
        else {
            return redirect()->back()->with('message', 'tidak ada post');
        }
    }
}
