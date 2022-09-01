<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use App\Models\ZipCode;

class ZipCodeController extends Controller
{
    public function index(Request $request){
        $response = ZipCode::where('code',$request->zip_code)->first();
        if($response){
            return json_decode($response->data);
        }

        $promise = Http::get('https://jobs.backbonesystems.io/api/zip-codes/'.$request->zip_code)->body();

        $rawdata = [
            'code' => $request->zip_code,
            'data' => $promise,
        ];
        // return $rawdata;
        ZipCode::create($rawdata);
        return json_decode($promise);
    }
}   
