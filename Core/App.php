<?php

namespace Core;

class App
{
    protected static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }

    public static function bind($key, $resolver)
    {
        static::container()->bind($key, $resolver);
    }

    /**
     * Get the available container instance.
     *
     * @template T
     * @param class-string<T>|null $key
     * @return T|mixed
     */
    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }
}
