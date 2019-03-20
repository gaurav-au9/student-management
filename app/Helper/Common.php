<?php

namespace App\Helper;
use Route;

class Common {

    public static function getCurrentController() {
        $action = Route::current()->action;
        $action1 = explode('\\', $action['controller']);
        $action2 = explode('@', end($action1));
        return $action2[0];
    }

    public static function uploadImage($image, $path) {
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move($path, $filename);
        return $filename;
    }

}
