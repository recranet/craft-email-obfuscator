<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f4edb6db45e2a1d02a25c70c5591311
{
    public static $files = array (
        '00da8b212e1c56ebc0940004c12e9b41' => __DIR__ . '/..' . '/propaganistas/email-obfuscator/src/Obfuscator.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Propaganistas\\EmailObfuscator\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Propaganistas\\EmailObfuscator\\' => 
        array (
            0 => __DIR__ . '/..' . '/propaganistas/email-obfuscator/src',
        ),
    );

    public static $classMap = array (
        'Propaganistas\\EmailObfuscator\\Laravel\\Middleware' => __DIR__ . '/..' . '/propaganistas/email-obfuscator/src/Laravel/Middleware.php',
        'Propaganistas\\EmailObfuscator\\Twig\\Extension' => __DIR__ . '/..' . '/propaganistas/email-obfuscator/src/Twig/Extension.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f4edb6db45e2a1d02a25c70c5591311::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f4edb6db45e2a1d02a25c70c5591311::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f4edb6db45e2a1d02a25c70c5591311::$classMap;

        }, null, ClassLoader::class);
    }
}
