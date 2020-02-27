<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    public static function getAll()
    {
        $added = DB::table('sheep_add')->count();
        $deleted = DB::table('sheep_delete')->count();
        $zagon1 = DB::table('sheep_add')
            ->where('zagon', 1)
            ->count();
        $zagon2 = DB::table('sheep_add')
            ->where('zagon', 2)
            ->count();
        $zagon3 = DB::table('sheep_add')
            ->where('zagon', 3)
            ->count();
        $zagon4 = DB::table('sheep_add')
            ->where('zagon', 4)
            ->count();
        $arrCol = collect([
            ['name' => 'Загон 1', 'num' => $zagon1],
            ['name' => 'Загон 2', 'num' => $zagon2],
            ['name' => 'Загон 3', 'num' => $zagon3],
            ['name' => 'Загон 4', 'num' => $zagon4],
        ]);
        $addedMax = collect($arrCol)->max('num');
        $arr = $arrCol->firstWhere('num', '==', $addedMax);
        $addedMin = collect($arrCol)->min('num');
        $arrMin = $arrCol->firstWhere('num', '==', $addedMin);
        $days = DB::table('sheep_add')->pluck('day');
        $data = [
            'sum' => $added + $deleted,
            'added' => $added,
            'deleted' => $deleted,
            'maxName' => $arr['name'],
            'minName' => $arrMin['name'],
            'days' => $days,
        ];
        return $data;
    }

    public static function getByDay($start, $end)
    {
        $added = DB::table('sheep_add')
            ->where('day', '>=', $start)
            ->where('day', '<=', $end)
            ->count();

        $deleted = DB::table('sheep_delete')
            ->where('day', '>=', $start)
            ->where('day', '<=', $end)
            ->count();
        $zagon1 = DB::table('sheep_add')
            ->where('zagon', 1)
            ->where('day', '>=', $start)
            ->where('day', '<=', $end)
            ->count();
        $zagon2 = DB::table('sheep_add')
            ->where('day', '>=', $start)
            ->where('day', '<=', $end)
            ->where('zagon', 2)
            ->count();
        $zagon3 = DB::table('sheep_add')
            ->where('day', '>=', $start)
            ->where('day', '<=', $end)
            ->where('zagon', 3)
            ->count();
        $zagon4 = DB::table('sheep_add')
            ->where('day', '>=', $start)
            ->where('day', '<=', $end)
            ->where('zagon', 4)
            ->count();
        $arrCol = collect([
            ['name' => 'Загон 1', 'num' => $zagon1],
            ['name' => 'Загон 2', 'num' => $zagon2],
            ['name' => 'Загон 3', 'num' => $zagon3],
            ['name' => 'Загон 4', 'num' => $zagon4],
        ]);
        $addedMax = collect($arrCol)->max('num');
        $arr = $arrCol->firstWhere('num', '==', $addedMax);
        $addedMin = collect($arrCol)->min('num');
        $arrMin = $arrCol->firstWhere('num', '==', $addedMin);
        $days = DB::table('sheep_add')->pluck('day');
        $data = [
            'sum' => $added + $deleted,
            'added' => $added,
            'deleted' => $deleted,
            'maxName' => $arr['name'],
            'minName' => $arrMin['name'],
            'days' => $days,
        ];
        return $data;
    }
}
