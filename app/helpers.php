<?php
use \Morilog\Jalali\CalendarUtils;
use \Illuminate\Support\Carbon;
if(!function_exists('convertJalaliToGeorgian')){

    function convertJalaliToGeorgian($date){
        $dateString = CalendarUtils::convertNumbers($date, true);
        return CalendarUtils::createCarbonFromFormat('Y/m/d', $dateString)->format('Y-m-d H:i:s');
    }


}


if(!function_exists('convertGeorgianToJalali')){

    function convertJsonDate($date){
        return Carbon::parse($date)->setTimezone(config('app.timezone'));
    }


}
