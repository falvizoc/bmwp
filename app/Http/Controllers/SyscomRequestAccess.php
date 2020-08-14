<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use function GuzzleHttp\headers_from_lines;
use Illuminate\Http\Request;


class SyscomRequestAccess extends Controller
{
    public function gettingToken(){
        $sik=env('SYSCOM_ID_KEY');
        $ssk=env('SYSCOM_SECRET_KEY');
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://developers.syscom.mx',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $res = $client->request('POST','/oauth/token',[
            'form_params' => [
                'client_id'     => 'mdFNWIEpbngep4ucEN1pqR57svWqj8XM',
                'client_secret' => '4AnHaRxosOQVvsG4OBNVQcvwQSkTXSLs4XETOXRd',
                'grant_type'    => 'client_credentials'
            ]]);

        $response = json_decode($res->getBody()); // Works fine, I do receive an access token.
        return dd($response);
    }
}
