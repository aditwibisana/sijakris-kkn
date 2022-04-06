<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class LatihanController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $response =  $client->get('https://datasekolahapi.herokuapp.com/api/data/sd/jakarta/pasar_minggu');
        $body = $response->getBody()->getContents();
        $project = json_decode($body);

        //$project = json_decode($response);
        //
        ////return view('response', compact($project));

        return view('pages.latihan', compact('project'));
    }
}
