<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36e87de6e5c708bf4c6268847ded1e4e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abdelfadeil\\SlugPhp\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abdelfadeil\\SlugPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit36e87de6e5c708bf4c6268847ded1e4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36e87de6e5c708bf4c6268847ded1e4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36e87de6e5c708bf4c6268847ded1e4e::$classMap;

        }, null, ClassLoader::class);
    }
}
