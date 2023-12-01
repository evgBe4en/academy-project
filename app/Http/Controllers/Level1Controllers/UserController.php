<?php

namespace App\Http\Controllers\Level1Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getUser($lastName, $firstName)
    {
        return response()->json([$firstName, $lastName], '200');
    }

}
