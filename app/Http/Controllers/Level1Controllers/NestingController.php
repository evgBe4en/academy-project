<?php

namespace App\Http\Controllers\Level1Controllers;

use App\Http\Controllers\Controller;

class NestingController extends Controller
{
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
