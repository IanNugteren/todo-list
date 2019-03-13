<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListModel;

class ListsController extends Controller
{
    public function index () 
    {
        $lists = ListModel::all();

        return view ('lists.index', compact('lists'));
    }
}
