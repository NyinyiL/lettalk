<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c847fb04d91712f18c166b07069024d
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/connect/Helpers',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/connect/Database',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c847fb04d91712f18c166b07069024d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c847fb04d91712f18c166b07069024d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c847fb04d91712f18c166b07069024d::$classMap;

        }, null, ClassLoader::class);
    }
}