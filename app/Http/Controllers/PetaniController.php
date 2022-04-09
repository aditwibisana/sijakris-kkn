<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;


class PetaniController extends Controller
{
    public function index()
    {
        $data = Farmer::paginate(2);
        return view('pages.petani', ['data' => $data], compact('data'));
    }
}
