<?php


namespace App\Repositories;


use GuzzleHttp\Client;

class Syscom
{
    private $token;
    /**
     * Syscom constructor.
     */
    public function __construct()
    {
        $this->token=$this->getToken();
    }

    private function getToken(){
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

        return json_decode($res->getBody()->getContents());
    }

    public function subcategorias($id){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://developers.syscom.mx/api/v1/categorias/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET',$id,[
            'headers' => [
                'Authorization' => 'Bearer '.$this->token->access_token,
            ]]);

        return json_decode($response->getBody()->getContents());
    }

}
