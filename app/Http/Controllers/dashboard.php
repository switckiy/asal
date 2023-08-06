<?php

namespace App\Http\Controllers;

use App\Models\TopicAdd;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {

        return view(
            'Admin.index'
        );
    }
    public function topic()
    {
        $topics = TopicAdd::all();

        return view(
            'Admin.topic',
            compact('topics')
        );
    }
    public function addtopic(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        // Simpan data ke database
        TopicAdd::create([
            'name' => $request->input('name'),
        ]);

        return redirect('Topic')->with('success', 'Add Topic success');
    }

    public function deletetopic($id)
    {
        $topic = TopicAdd::find($id);
        if ($topic) {
            $topic->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        }

        return redirect()->back()->with('error', 'Data tidak ditemukan!');
    }
}
