<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68bb3e4aaf1ac0f944f5807bd5227d92
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rych\\Random' => 
            array (
                0 => __DIR__ . '/..' . '/rych/random',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit68bb3e4aaf1ac0f944f5807bd5227d92::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit68bb3e4aaf1ac0f944f5807bd5227d92::$classMap;

        }, null, ClassLoader::class);
    }
}
