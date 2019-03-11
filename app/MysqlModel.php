<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; //I had to add this line to use DB::table

class MysqlModel extends Model
{
  public static function GetAll() {
    $results = DB::table('random_nums')->select('number')->get();

    return $results;
  }
}
