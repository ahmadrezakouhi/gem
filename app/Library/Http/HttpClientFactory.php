<?php

namespace App\Library\Http;

class HttpClientFactory
{
    public static function make()
    {
        return new HttpClient([
            'UserName' => 'BLUser11001',
            'PassWord' => '91479147'
        ], 'https://api.safermehr.ir/api/Access/');
    }
}
