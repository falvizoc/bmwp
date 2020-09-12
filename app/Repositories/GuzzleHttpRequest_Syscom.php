<?php


namespace App\Repositories;


use App\Models\supplierAccessToken;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class GuzzleHttpRequest_Syscom
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var mixed
     */
    private $token;

    /**
     * Syscom constructor.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->token = $this->getToken();
    }

    /** Solicita un Token a Syscom */
    private function askForToken(){
        //Ask for a new token
        $res = $this->client->request('POST','/oauth/token',[
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
            'expiring_date' => now()->addYear(),
            'is_valid'      => True
        ]);
        return $token->access_token;
    }

    /** Devuelve un token guardado en la BD */
    private function getToken(){
        //Obtenemos el token desde la bd
        $token = DB::table('supplier_Access_Tokens')
            ->select('access_token','expiring_date','is_valid')
            ->where([
                ['supplier_Id', '=' ,'1'],
                ['is_valid', '=', '1'],
            ])
            ->first();
        //->value('access_token');
        //Si no encuentra el token, pide uno
        if (!$token) {
            return $this->askForToken();
        }
        //Si el token está vigente, lo envía.
        if ($token->expiring_date > now()) {
            return $token->access_token;
        }else{ // Y si el token no está vigente
            //Elimina vigencia de token y pide otro nuevo
            $q=DB::table('supplier_Access_Tokens')
                ->where([
                    ['supplier_Id', '=' ,'1'],
                    ['is_valid', '=', '1'],
                ])->update(['is_valid'=>0]);
            return $this->askForToken();
        }
    }

    /** Devuelve consultas de la API Syscom */
    protected function get($url, $cat_id=null){
        if (is_null($cat_id)){
            $response = $this->client->request('GET',"api/v1/$url",[
                'headers' => [
                    'Authorization' => 'Bearer '.$this->token,
                ]]);
        }else{
            $response = $this->client->request('GET',"api/v1/$url",[
                'headers' => [
                    'Authorization' => 'Bearer '.$this->token,
                ],
                'query' => [
                    'categoria' => $cat_id,
                ]]);
        }
        return json_decode($response->getBody()->getContents());
    }
}
