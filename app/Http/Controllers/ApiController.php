<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    const token = "100bf38cc8393103870917dd535e0628";
    public function api(){
        if (\request()->ip()){

            return User::all();
        }
        else{
            return "Authorized Failed !" ;
        }
    }
}
