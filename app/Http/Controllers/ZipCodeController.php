<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZipCodeController extends Controller
{
    public function index(Request $request){
        return $response = Http::get('https://jobs.backbonesystems.io/api/zip-codes/'.$request->zip_code)->json();
    }
}
