<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use App\Models\SurveyCreate;


class SurveyController extends Controller
{


    public function survey_show()
    {
        $all_data = SurveyCreate::all();
        //dump($all_data);
        if ($all_data->isEmpty()) {
            return view('admin.survey', ['surveys' => $all_data, 'message' => 'No surveys available.']);
        }
        else
        {
            return view('admin.survey', compact('all_data'));
        }

        //return view('admin.survey');
    }

    public function survey_details($id)
    {
        $data = SurveyCreate::findOrFail($id);
        $question = Questions::findOrFail($data->id);
        dump($question);
        return view('admin.survey_details', compact('data', 'question'));
    }

    public function survey_create()
    {
        return view('admin.survey_create');
    }

    public function surveyStore(Request $request)
    {
       $request->validate([
            'title' => 'required',
            'details' => 'required|string|max:1000',
        ]);

        SurveyCreate::insert([
            'title' => $request->title,
            'details' => $request->details,
        ]);


        $notification = array(
            'message' => 'Survey added successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.survey')->with($notification);

        //return view('admin.survey_create');
    }

    public function surveyEdit($id)
    {
        $data = SurveyCreate::findOrFail($id);
        return view('admin.survey_edit', compact('data'));
    }

    public function surveyUpdate(Request $request)
    {
        $pid = $request->id;
        $request->validate([
            'title' => 'required',
            'details' => 'required|string|max:1000',
        ]);

        SurveyCreate::findOrFail($pid)->update([
            'title' => $request->title,
            'details' => $request->details,
        ]);


        $notification = array(
            'message' => 'Survey updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.survey')->with($notification);

    }

    public function survey_delete(Request $request)
    {
        $item = SurveyCreate::find($request->id);
        $item->delete();
        return redirect()->back();
//        return view('admin.survey_delete');
    }


    public function surveyForm()
    {
        return view('admin.survey_form');
    }

}
