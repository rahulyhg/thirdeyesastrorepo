<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9847a9b3d864028ca011a197f1b62cef
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9847a9b3d864028ca011a197f1b62cef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9847a9b3d864028ca011a197f1b62cef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
