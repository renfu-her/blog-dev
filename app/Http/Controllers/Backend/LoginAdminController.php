<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class LoginAdminController extends Controller
{

    public function index(){

        return view('backend.login.admin');
    }
}
