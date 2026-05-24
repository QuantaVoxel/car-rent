<?php


if (!function_exists('config')) {

    function config(?string $name = null): mixed
    {
        $config = require __DIR__ . '/config.php';

        if ($name === null) {
            return $config;
        }

        foreach (explode('.', $name) as $segment) {
            if (!is_array($config) || !array_key_exists($segment, $config)) {
                return null; // or throw exception
            }

            $config = $config[$segment];
        }

        return $config;
    }

}

if (!function_exists('database')) {
    function database(): \Backend\CarRent\Database
    {
        return \Backend\CarRent\Database::getInstance();
    }
}

if (!function_exists('layout')) {
    function layout($view, $data = [])
    {
        extract($data);
        ob_start();
        require __DIR__ . "/../views/layouts/" . $view . ".php";

        return  ob_get_clean();
    }
}

if (!function_exists('component')) {
    function component($view, $data = [])
    {
        extract($data);
        ob_start();
        require __DIR__ . "/../views/components/" . $view . ".php";

        return ob_get_clean();
    }
}

if(!function_exists('auth')){
    function auth(): \Backend\CarRent\Auth{
        return \Backend\CarRent\Auth::getInstance();
    }
}

if (!function_exists('set_flash')) {
    function set_flash($type, $message)
    {
        $_SESSION['flash'][$type] = $message;
    }
}

if (!function_exists('get_flash')) {
    function get_flash($type)
    {
        if (isset($_SESSION['flash'][$type])) {
            $message = $_SESSION['flash'][$type];
            unset($_SESSION['flash'][$type]);
            return $message;
        }
        return null;
    }
}

if (!function_exists('has_flash')) {
    function has_flash($type)
    {
        return isset($_SESSION['flash'][$type]);
    }
}