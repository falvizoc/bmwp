<?php


namespace App\Repositories;
use App\Models\supplierAccessToken;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

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
        //Obtenemos el token desde la bd
        $token = DB::table('supplier_Access_Tokens')
            ->where('supplier_Id', '1')
            ->value('access_token');


        //Si no encuentra el token
        if (!$token) {
            //Ask for a new token
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
            $token=json_decode($res->getBody()->getContents());
            //Setting data in DB
            supplierAccessToken::create([
                'token_type'    => $token->token_type,
                'expires_in'    => $token->expires_in,
                'access_token'  => $token->access_token,
                'supplier_id'   => '1',
                'created_at'    => now(),
                'updated_at'    => now(),
                'is_valid'      => True
            ]);
            return $token->access_token;
        }
        return $token;
    }

    public function subcategorias($id){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://developers.syscom.mx/api/v1/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET',"categorias/{$id}",[
            'headers' => [
                'Authorization' => 'Bearer '.$this->token,
            ]]);
        return json_decode($response->getBody()->getContents());
    }

}
