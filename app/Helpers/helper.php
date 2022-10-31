<?php

namespace App\Helpers;
use DB;

class Helper
{

   public static function getSetting()
   {
      return DB::table('settings')->first();
   }

   public static function rupiahFormatter($value)
   {
      return "Rp " . number_format($value, 2, ',', '.');
   }
}
