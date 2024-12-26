<?php

namespace MVC\core;

use MVC\core\session\Session;

class Request
{
    public static array $globalWeb = [
        Session::class,
        //CSRFToken::class
    ];
    public static array $globalApi = [];
    public function __construct()
    {
        $this->routeBasedOnPath();
    }
    public static function path(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = filter_var($path, FILTER_SANITIZE_URL);
        $position = strpos($path, '?');
        $path = $position !== false ? substr($path, 0, $position) : $path;
        return $path === '/' ? '/' : ltrim($path, '/');
    }
    public static function method(): string
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }
    public function routeBasedOnPath(): void
    {
        self::isApiRequest() ? self::apiRoute() : self::webRoute();
    }
    public static function isApiRequest(): bool
    {
        return str_starts_with(self::path(), 'api');
    }
    public static function apiRoute(): void
    {
        foreach (static::$globalApi as $global) {
            new $global();
        }
        include route_path('api.php');
    }
    public static function webRoute(): void
    {
        foreach (static::$globalWeb as $global) {
            new $global();
        }
        //CSRFToken::getToken();
        include route_path('web.php');
    }
    /**
    public static function segments(int $offset): string
    {
        $segments = explode('/', self::path());
        return $segments[$offset] ?? '';
    }
     * */
    public static function getBody(?string $name = null, mixed $default = null, int|array $filter = FILTER_SANITIZE_FULL_SPECIAL_CHARS): mixed
    {
        $method = self::method();
        $data = [];

        if ($method === 'GET') {
            $data = $_GET;
        } elseif ($method === 'POST') {
            $data = $_POST;
        } elseif (in_array($method, ['PUT', 'DELETE', 'PATCH'])) {
            $input = file_get_contents('php://input');
            $jsonData = json_decode($input, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $data = $jsonData;
            } else {
                parse_str($input, $data);
            }
        }

        // Sanitize the data
        $data = filter_var_array($data, $filter) ?? [];

        // Merge file uploads for POST requests
        if ($method === 'POST' && !empty($_FILES)) {
            $data = array_merge($data, $_FILES);
        }

        // Return specific parameter or all data
        if ($name !== null) {
            return $data[$name] ?? $default;
        }
        return $data;
    }

}