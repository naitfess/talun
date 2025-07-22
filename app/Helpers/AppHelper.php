<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Position;

class AppHelper
{
    public static function getPositions()
    {
        $data['positions'] = Position::get();
        return $data['positions'];
    }

    public static function getCategories()
    {
        $data['categories'] = Category::get();
        return $data['categories'];
    }
}