<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc3d49f77c1e40b1916b57d2b66fc735
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mishi\\HelloComposer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mishi\\HelloComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc3d49f77c1e40b1916b57d2b66fc735::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc3d49f77c1e40b1916b57d2b66fc735::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc3d49f77c1e40b1916b57d2b66fc735::$classMap;

        }, null, ClassLoader::class);
    }
}
