<?php 
namespace App\Services; 
use GuzzleHttp\Client; 
use GuzzleHttp\Exception\RequestException; 

class LoLService
{ 
    protected $client; 
    protected $apiKey;

    public function __construct() 
    { 
        $this->client = new Client(); 
        $this->apiKey = env('RAPIDAPI_KEY');
    } 

    public function getRegion() 
    { 
        try { 
            $response = $this->client->request('GET','https://league-of-legends-champions.p.rapidapi.com/regions/en-us/bandle-city', ['headers' => [ 'x-rapidapi-key' => $this->apiKey], 'verify' => false 
        ]); 
            return json_decode($response->getBody()->getContents(), true); 
            $data = json_decode($response->getBody()->getContents(), true); 
            return $data; 
        } catch (RequestException $e) { 
            return ['error' => $e->getMessage()]; 
        } 
    } 
} 