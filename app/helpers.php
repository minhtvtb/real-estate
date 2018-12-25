<?php
/**
 * Created by PhpStorm.
 * User: tranminh
 * Date: 12/15/18
 * Time: 3:43 PM
 */
if (!function_exists('formatDate')) {
    function formatDate($inputString)
    {
        return date('d/m/Y', strtotime($inputString));
    }
}
if (!function_exists('getPhoneSetting')) {
    function getPhoneSetting()
    {
        return \App\Entities\SetupInfo::all()->where('key', 'phone')->first()->value;
    }
}
if (!function_exists('getAddress')) {
    function getAddress()
    {
        return \App\Entities\SetupInfo::all()->where('key', 'address')->first()->value;
    }
}
