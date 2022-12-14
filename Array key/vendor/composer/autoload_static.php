<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8c2e06ccbc32e3707596f12dfbc2a20
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fairwalter\\Cinema\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fairwalter\\Cinema\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8c2e06ccbc32e3707596f12dfbc2a20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8c2e06ccbc32e3707596f12dfbc2a20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8c2e06ccbc32e3707596f12dfbc2a20::$classMap;

        }, null, ClassLoader::class);
    }
}
