<?php

class View
{
    public static function frontView($module, $method, $data = null)
    {
        if (file_exists($file = DIRECTORY . "/moduls/{$module}/view/{$method}View.php")) {
            require_once $file;
        }
        else{
            echo "Page Not Fount";
        }
    }
}
