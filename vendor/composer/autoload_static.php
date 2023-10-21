<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbce51cb9573bbe686301a43cd761dba
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Devashish\\B2b\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Devashish\\B2b\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbce51cb9573bbe686301a43cd761dba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbce51cb9573bbe686301a43cd761dba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbbce51cb9573bbe686301a43cd761dba::$classMap;

        }, null, ClassLoader::class);
    }
}
