<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class ReportController extends Controller
{
    public function index()
    {
        $all = App\Report::getAll();
        return view('report',  ['data' => $all]);
    }
    public function quarter(Request $request)
    {
        $first = $request->get('filter_col1');
        $second = $request->get('filter_col2');
        $all = App\Report::getByDay($first, $second);
        return view('report',  ['data' => $all]);
    }
}
