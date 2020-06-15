<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbec4c910f0bb1b4688965c461897ffa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\src\\' => 8,
            'App\\config\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbec4c910f0bb1b4688965c461897ffa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbec4c910f0bb1b4688965c461897ffa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}