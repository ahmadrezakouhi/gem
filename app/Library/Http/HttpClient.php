<?php

namespace App\Library\Http;

use Illuminate\Support\Facades\Http;

class HttpClient extends Http
{


    protected $base_url;
    protected $headers;

    public function __construct($headers, $base_url)
    {
        $this->base_url = $base_url;
        $this->headers = $headers;
    }


    public function post($url)
    {
        $response = parent::withHeaders($this->headers)->post($this->base_url . $url);
        if ($response->ok()) {
            $json_response = json_decode($response['result']);
            if ($json_response->StatusCode == 200) {
                return $json_response->Result;
            }
        }
    }
}
