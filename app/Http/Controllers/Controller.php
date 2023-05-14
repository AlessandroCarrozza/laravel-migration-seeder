<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Train;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function index() {
        $trains = Train::all();
        return view("home", compact("trains"));
    }
}
