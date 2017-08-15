<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit427ffd05df6aa7aa3757e38d9234361f
{
    public static $files = array (
        '64745745f6fbbc645762f24cc3e63d54' => __DIR__ . '/..' . '/maciejczyzewski/bottomline/bottomline.php',
    );

    public static $prefixLengthsPsr4 = array (
        '_' => 
        array (
            '__\\' => 3,
        ),
        'C' => 
        array (
            'Campo\\' => 6,
        ),
        'B' => 
        array (
            'Buchin\\GoogleImageGrabber\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '__\\' => 
        array (
            0 => __DIR__ . '/..' . '/maciejczyzewski/bottomline/src',
        ),
        'Campo\\' => 
        array (
            0 => __DIR__ . '/..' . '/campo/random-user-agent/src',
        ),
        'Buchin\\GoogleImageGrabber\\' => 
        array (
            0 => __DIR__ . '/..' . '/buchin/google-image-grabber/src',
        ),
    );

    public static $prefixesPsr0 = array (
        's' => 
        array (
            'stringEncode' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/string-encode/src',
            ),
        ),
        'P' => 
        array (
            'PHPHtmlParser' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/php-html-parser/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit427ffd05df6aa7aa3757e38d9234361f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit427ffd05df6aa7aa3757e38d9234361f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit427ffd05df6aa7aa3757e38d9234361f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}