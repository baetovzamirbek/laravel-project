<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Sheep extends Model
{
    public static function addOne($data)
    {
        DB::table('sheep_add')->insert(
            ['zagon' => $data['data'], 'day' => $data['day']]
        );
    }

    public static function deleteOne($data)
    {
        DB::table('sheep_delete')->insert(
            ['zagon' => $data['data'], 'day' => $data['day']]
        );
    }
}
