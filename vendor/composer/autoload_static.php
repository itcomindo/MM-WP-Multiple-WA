<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b1539744d940d7c2019f111d30c0ca7
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b1539744d940d7c2019f111d30c0ca7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b1539744d940d7c2019f111d30c0ca7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b1539744d940d7c2019f111d30c0ca7::$classMap;

        }, null, ClassLoader::class);
    }
}
