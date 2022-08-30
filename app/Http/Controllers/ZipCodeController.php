<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class ZipCodeController extends Controller
{
    public function index(Request $request){
        $promise = Http::get('https://jobs.backbonesystems.io/api/zip-codes/'.$request->zip_code);

        return $promise->json();
    }
}
