<?php

namespace App\Http\Controllers;

use App\Models\CocokTanam;
use Illuminate\Http\Request;
use App\Models\Farmer;

class DashboardController extends Controller
{
    public function index()
    {
        $farmer = Farmer::count();
        return view('pages.admin.index')->with('farmer', $farmer);
    }
    public function farmerList()
    {
        $data = Farmer::all();
        return view('pages.admin.list_farmer', ['data' => $data]);
    }
    public function addFarmerForm()
    {
        return view('pages.admin.form_create_farmer');
    }
    public function cocokTanam()
    {
        $tanam = CocokTanam::all();
        return view('pages.admin.cocok-tanam', ['tanam' => $tanam]);
    }
    public function addTanamForm()
    {
        return view('pages.admin.form_create_tanam');
    }
}
