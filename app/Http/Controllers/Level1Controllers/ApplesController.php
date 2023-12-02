<?php

namespace App\Http\Controllers\Level1Controllers;

use App\Http\Controllers\Controller;

class ApplesController extends Controller
{
    public function getAppleColor($pattern, $index)
    {
        if ($index < 0) {
            return response()->json(['error' => 'Індекс повинен бути невід\'ємним числом'], 400);
        }

        $color = $this->getColorFromPattern($pattern, $index);

        return response()->json(['index' => $index, 'color' => $color], 200);
    }

    private function getColorFromPattern($pattern, $index)
    {
        $patternLength = strlen($pattern);
        $colorIndex = $index % $patternLength;
        return $pattern[$colorIndex];
    }
}
