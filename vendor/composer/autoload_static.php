<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9581151798adea7a5b69875afebcc873
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Shuchkin\\SimpleXLSX' => __DIR__ . '/..' . '/shuchkin/simplexlsx/src/SimpleXLSX.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9581151798adea7a5b69875afebcc873::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9581151798adea7a5b69875afebcc873::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9581151798adea7a5b69875afebcc873::$classMap;

        }, null, ClassLoader::class);
    }
}
