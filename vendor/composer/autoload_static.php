<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92d99ad2c536776304a43d75e6cd51f7
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Two\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Two\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92d99ad2c536776304a43d75e6cd51f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92d99ad2c536776304a43d75e6cd51f7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
