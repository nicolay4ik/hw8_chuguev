<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a0800c6b6ebfd9d803fd3bb28bc8221
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a0800c6b6ebfd9d803fd3bb28bc8221::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a0800c6b6ebfd9d803fd3bb28bc8221::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
