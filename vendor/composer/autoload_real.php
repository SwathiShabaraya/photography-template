<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb02fd6362e723f4bbc2fda3b5eaf712b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb02fd6362e723f4bbc2fda3b5eaf712b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb02fd6362e723f4bbc2fda3b5eaf712b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb02fd6362e723f4bbc2fda3b5eaf712b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
