<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;


class SheepController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function addOne(Request $request)
    {
        $time = App\Sheep::addOne($request->all());
    }
    public function deleteOne(Request $request)
    {
        $time = App\Sheep::deleteOne($request->all());
    }
}
