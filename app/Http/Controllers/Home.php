<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;
use App\Models\TopicAdd;

class Home extends Controller
{
    public function index()
    {

        return view(
            'home.index',
            [
                "title" => "Home"
            ]
        );
    }
    public function form()
    {
        $topics = TopicAdd::all();

        return view(
            'home.form',
            [
                "title" => "Ticket"
            ],
            compact('topics')
        );
    }
    public function faq()
    {

        return view(
            'home.faq',
            [
                "title" => "Faq"
            ]
        );
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'topic_id' => 'required|integer',
            'message' => 'required|string',
            'file' => 'sometimes|file|mimes:pdf,doc,docx,png,jpg|max:2048',

        ]);

        // If a file was uploaded, handle the file here
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename); // Store the file in the 'uploads' folder inside the 'storage/app/public' directory
            $validatedData['file'] = $filename; // Store the file name in the $validatedData array
        }

        FormData::create([
            'user_id' => $request->input('user_id'),
            'topic_id' => $request->input('topic_id'),
            'message' => $request->input('message'),
            'file' => isset($validatedData['file']) ? $validatedData['file'] : null,
        ]);

        // Redirect the user back to the form with a success message
        return redirect()->back()->with('success', 'Form submitted successfully.');
    }
}
