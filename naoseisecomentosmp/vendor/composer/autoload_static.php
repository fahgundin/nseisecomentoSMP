<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b19d280f781ede387b6fb5b7fad7051
{
    public static $prefixLengthsPsr4 = array (
        'x' => 
        array (
            'xPaw\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'xPaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/xpaw/php-minecraft-query/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b19d280f781ede387b6fb5b7fad7051::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b19d280f781ede387b6fb5b7fad7051::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b19d280f781ede387b6fb5b7fad7051::$classMap;

        }, null, ClassLoader::class);
    }
}
