<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01afb79a589936313ebf509f5093a49b
{
    public static $files = array (
        'bccfaf6207f67190a92f35585e9a78b2' => __DIR__ . '/..' . '/twilio/sdk/Services/Twilio.php',
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit01afb79a589936313ebf509f5093a49b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
