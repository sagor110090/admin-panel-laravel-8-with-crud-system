<?php

use App\Models\SiteSetting;

function siteInfo()
{
    return SiteSetting::findOrFail(1);

}

if (!function_exists('siteName')) {
    function siteName()
    {
        try {
            return SiteSetting::findOrFail(1)->website_name;

        } catch (\Throwable $th) {

            return 'Laravel';
        }

    }
}

if (!function_exists('language')) {
    function language()
    {
        try {
            return SiteSetting::find(1)->language;
        } catch (\Throwable $th) {
            return 'en';
        }

    }
}
if (!function_exists('plural_from_model')) {
    function plural_from_model($model)
    {
        $plural = \Str::plural(class_basename($model));

        return \Str::kebab($plural);
    }
}

// function dateGet()
// {
//     $d = "";
//     $today = new DateTime(); // today
//     $begin = $today->sub(new DateInterval('P30D')); //created 30 days interval back
//     $end = new DateTime();
//     $end = $end->modify('+1 day'); // interval generates upto last day
//     $interval = new DateInterval('P1D'); // 1d interval range
//     $daterange = new DatePeriod($begin, $interval, $end); // it always runs forwards in date
//     foreach ($daterange as $date) { // date object

//         $d .= "'" . $date->format("m/d/Y") . " GMT',"; // your date

//     }
//     return $d;
// }
// function delivered()
// {
//     $d = "";
//     $today = new DateTime(); // today
//     $begin = $today->sub(new DateInterval('P30D')); //created 30 days interval back
//     $end = new DateTime();
//     $end = $end->modify('+1 day'); // interval generates upto last day
//     $interval = new DateInterval('P1D'); // 1d interval range
//     $daterange = new DatePeriod($begin, $interval, $end); // it always runs forwards in date
//     foreach ($daterange as $date) { // date object

//         $d .= Order::whereDate('created_at', $date->format("Y-m-d"))->where('status', 'delivered')->get()->count() . ","; // your date

//     }
//     return $d;
// }

// function pending()
// {
//     $d = "";
//     $today = new DateTime(); // today
//     $begin = $today->sub(new DateInterval('P30D')); //created 30 days interval back
//     $end = new DateTime();
//     $end = $end->modify('+1 day'); // interval generates upto last day
//     $interval = new DateInterval('P1D'); // 1d interval range
//     $daterange = new DatePeriod($begin, $interval, $end); // it always runs forwards in date
//     foreach ($daterange as $date) { // date object

//         $d .= Order::whereDate('created_at', $date->format("Y-m-d"))->where('status', null)->get()->count() . ","; // your date

//     }

//     return $d;
// }

function language()
{
   $lan =  SiteSetting::find(1)->language;
   if (empty($lan)) {
    $lan = 'en';
   }
   return $lan;
}
