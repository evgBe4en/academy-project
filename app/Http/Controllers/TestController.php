<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getUser($lastName, $firstName)
    {
        return response()->json([$firstName, $lastName], '200');
    }

    public function getNestedData($i)
    {
        $nestedData = $this->createNestedData($i);
        return response()->json($nestedData, 200);
    }

    private function createNestedData($level)
    {
        if ($level === 1) {
            return ['level_1' => null];
        }

        return [
            'level_' . $level => $this->createNestedData($level - 1)
        ];
    }


}
