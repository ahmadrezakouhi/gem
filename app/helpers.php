<?php
use \Morilog\Jalali\CalendarUtils;
use \Illuminate\Support\Carbon;



if(!function_exists('convertIsoDate')){

    function convertIsoDate($date){
        return Carbon::parse($date)->setTimezone(config('app.timezone'));
    }


}


if(!function_exists('getRandomCost')){


    function getRandomCost($exponent){
        return fake()->randomDigitNotZero() * pow(10,$exponent);
    }
}
