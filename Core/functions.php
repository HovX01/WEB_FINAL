<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }

    return true;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

//function env($key, $default = '')
//{
//    return getenv($key) ?? $default;
//}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}

function session($key, $default = '')
{
    return Core\Session::get($key) ?? $default;
}

function app($key)
{
    return \Core\App::resolve($key);
}

function str_slug($text, $separator = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $separator, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $separator);

    // remove duplicate divider
    $text = preg_replace('~-+~', $separator, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

function get_avatar_by_user_id($user_id)
{
    $avatarId = $user_id % 13 + 1;
    return "/admin-asset/img/user/user-$avatarId.jpg";
}