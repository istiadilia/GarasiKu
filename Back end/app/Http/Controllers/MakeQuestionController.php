<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class MakeQuestionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('question', [
            "tittle" => "question",
            "question" => question::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'quest_title' => 'required|max:255',
            // 'slug' => 'required|unique:questions',
            'quest_body' => 'required',
            'quest_pict' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['ans_count'] = auth()->user()->id;

        question::create($validatedData);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        question::destroy($question->id);

        return redirect('/');

    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(question::class, 'slug', $request->title);
        return response()->json(['slug' =>$slug]);
    }
}
