<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13527d3e37affa94e11912da14dfa703
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BrainFuck\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BrainFuck\\' => 
        array (
            0 => __DIR__ . '/..' . '/ryo-utsunomiya/php-fxxk/lib/BrainFuck',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13527d3e37affa94e11912da14dfa703::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13527d3e37affa94e11912da14dfa703::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
