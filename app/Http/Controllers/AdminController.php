<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function panel()
    {
        return view('admin.panel');
    }

    public function table()
    {
        return view('admin.table');
    }

    public function ui(){
        return view('admin.ui');
    }


}


