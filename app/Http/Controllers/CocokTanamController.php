<?php

namespace App\Http\Controllers;

use App\Models\CocokTanam;
use Illuminate\Http\Request;

class CocokTanamController extends Controller
{
    public function index()
    {
        $data = CocokTanam::all();
        return view('pages.cocok-tanam', ['data' => $data]);
    }
    public function createTanam(Request $request)
    {
        // Function Create
        //dd($request->all());
        $post = CocokTanam::create([
            'headline' => $request->headline,
            'photo' => $request->photo,
            'description' => $request->description,
        ]);
        return back()
            ->with('success', 'Berhasil');
    }
    public function formEdit(Request $request, $id)
    {
        $post = CocokTanam::findOrFail($id);
        return view('pages.admin.form_edit_tanam', compact('post'));
    }
}
