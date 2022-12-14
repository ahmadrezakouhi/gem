<?php
use \Morilog\Jalali\CalendarUtils;






if(!function_exists('getRandomCost')){


    function getRandomCost($exponent){
        return fake()->randomDigitNotZero() * pow(10,$exponent);
    }
}




