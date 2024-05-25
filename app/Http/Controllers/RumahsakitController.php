<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RumahsakitController extends Controller
{
    public function index() {
        $response = Http::get('https://rs-bed-covid-api.vercel.app/api/get-provinces')->json();
        return view('rumahsakit/provinsi',['response' => $response['provinces']]);
    }
    
    public function kabkot(Request $request) {
        $id = $request->id;
        $endpoint = 'https://rs-bed-covid-api.vercel.app/api/get-cities?provinceid='.$id;
        $response = Http::get($endpoint)->json();
        return view('rumahsakit/kabkot',['response' => $response['cities'], 'idprop' => $id]);
        // return view('edit',['data' => $data]);
    }
    
    public function rumahsakit(Request $request) {
        
        $idprop = $request->idprop;
        $idrumahsakit = $request->idrumahsakit;
        $endpoint = 'https://rs-bed-covid-api.vercel.app/api/get-hospitals?provinceid='.$idprop.'&cityid='.$idrumahsakit.'&type=2';
        $response = Http::get($endpoint)->json();
        // dd($response['hospitals']);
        return view('rumahsakit/rumahsakit', ['response' => $response['hospitals']]);
    }
}
