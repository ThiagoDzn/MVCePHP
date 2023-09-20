<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7fa35f66b14193cddec434719bb07f8c
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7fa35f66b14193cddec434719bb07f8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7fa35f66b14193cddec434719bb07f8c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7fa35f66b14193cddec434719bb07f8c::$classMap;

        }, null, ClassLoader::class);
    }
}
