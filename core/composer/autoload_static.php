<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89972e43200b1f94080b44300d81d4da
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'GatewayWorker\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/framework/workerman',
        ),
        'GatewayWorker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/framework/gatewayworker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89972e43200b1f94080b44300d81d4da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89972e43200b1f94080b44300d81d4da::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
