<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function sign_up()
    {
        $data['breadcrumb'] = true;
        $data['breadcrumbs'] = ['Register'];
        return view('frontend.auth.sign_up', compact('data'));
    }
}

