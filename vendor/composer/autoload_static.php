<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7205d564d1d0c8c68cb21784309bccb2
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7205d564d1d0c8c68cb21784309bccb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7205d564d1d0c8c68cb21784309bccb2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
