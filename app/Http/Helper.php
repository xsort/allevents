<?php
/**
 * Created by PhpStorm.
 * User: Denisoff
 * Date: 22.04.2016
 * Time: 11:29
 */

namespace App\Http;

use DateTime;

class Helper
{
    public static function parseDate($string){
        DateTime::createFromFormat('d-m-Y', $string);
    }

}