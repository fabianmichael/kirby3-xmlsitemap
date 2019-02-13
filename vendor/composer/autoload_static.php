<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit553507d640afd1d554f9eb53219c6ec9
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'omz13\\' => 6,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'omz13\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'omz13\\XMLSitemap' => __DIR__ . '/../..' . '/src/xmlsitemap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit553507d640afd1d554f9eb53219c6ec9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit553507d640afd1d554f9eb53219c6ec9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit553507d640afd1d554f9eb53219c6ec9::$classMap;

        }, null, ClassLoader::class);
    }
}