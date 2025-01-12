<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit567a8123f904b64d4ac11202f2672de7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Matheus\\ProjetoP1\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Matheus\\ProjetoP1\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit567a8123f904b64d4ac11202f2672de7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit567a8123f904b64d4ac11202f2672de7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit567a8123f904b64d4ac11202f2672de7::$classMap;

        }, null, ClassLoader::class);
    }
}
