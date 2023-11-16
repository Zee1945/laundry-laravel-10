<?php

namespace App\Http\Controllers\Trans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaundryController extends Controller
{

    public function index()
    {

        return view('form-list.master.laundry.index');
    }
}
