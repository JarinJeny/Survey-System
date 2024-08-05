<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyCreate;
use App\Models\Questions;
class QuestionController extends Controller
{
    public function question_create($id)
    {
        $data = SurveyCreate::findOrFail($id);
        //dump($data);
        return view('admin.question_create', compact('data'));
    }


    public function store(Request $request, $id)
    {
        $survey = SurveyCreate::findOrFail($id);
        //dump($survey);
        $validated = $request->validate([
            'questions' => 'required|array',
            'survey_id' => 'required',
            'questions.*' => 'required|string|max:255'
        ]);
        dump($validated);

        foreach ($validated['questions'] as $question_text) {
            Questions::create([
                'question' => $question_text,
                'survey_id' => $survey->id
            ]);
        }
        return redirect()->route('admin.survey')->with('success', 'Questions added successfully');
    }
}
