<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MysqlModel extends Model
{
  public static function GetAll() {
    $results = DB::table('ronin')->get();

    return $results;
  }
}
