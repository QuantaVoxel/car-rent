<?php


if (!function_exists('config')) {

    function config(): array
    {
        return require __DIR__ . "/config.php";
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