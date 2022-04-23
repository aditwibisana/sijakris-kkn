<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;


class PetaniController extends Controller
{
    // User Pages
    public function index()
    {
        $data = Farmer::paginate(99);
        return view('pages.petani', ['data' => $data], compact('data'));
    }
    // Admin Pages
    public function createFarmer(Request $request)
    {
        // Function Create
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = 'gambar.jpg';
        $post = Farmer::create([
            'name' => $request->name,
            'photo' => $request->photo->move(public_path('photo'), $imageName),
            'contact' => $request->contact,
            'list_of_plant' => $request->list_of_plant,
        ]);
        return back()
            ->with('success', 'Berhasil menambahkan petani')
            ->with('image', $imageName);
    }
    public function formEdit(Request $request, $id)
    {
        $post = Farmer::findOrFail($id);
        return view('pages.admin.form_edit_farmer', compact('post'));
    }
    public function updateFarmer(Request $request, $id)
    {
        $post = Farmer::findOrFail($id);
        $post->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'list_of_plant' => $request->list_of_plant,
        ]);
        return back()
            ->with('success', 'Berhasil');
    }
    public function deleteFarmer($id)
    {
        $post = Farmer::findOrFail($id);
        $post->delete();
        return back()
            ->with('success', 'Berhasil menghapus petani');
    }
}
