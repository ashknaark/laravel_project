<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testEnrollmentController extends Controller
{
    public function sendTest(){
        $enrollmentData = [
            'body' => 'you recived my mail',
            'enrollmentText' =>  'lug'
        ];
    }
}
