<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getUser($lastName, $firstName)
    {
        return response()->json([$firstName, $lastName], '200');
    }
}
