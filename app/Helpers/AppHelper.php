<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Position;
use App\Models\VillageSetting;

class AppHelper
{
    public static function getSetting()
    {
        $data['villageSetting'] = VillageSetting::first();
        return $data['villageSetting'];
    }

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