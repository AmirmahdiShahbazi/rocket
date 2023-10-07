<?php 


namespace Savalan\Rocket;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class RocketClient{

    public function __construct()
    {

    }


    public function login()
    {
        $client = new Client();
        $headers = [
        'Content-Type' => 'application/x-www-form-urlencoded'
        ];
        $options = [
        'form_params' => [
        'user' => config('rocket.user'),
        'password' => config('rocket.password')
        ]];

        $request = new Request('POST', 'https://support.luxota.org/api/v1/login', $headers);
        $res = $client->sendAsync($request, $options)->wait();
        return response($res->getBody());

    }

    public function send()
    {
        
    }
}