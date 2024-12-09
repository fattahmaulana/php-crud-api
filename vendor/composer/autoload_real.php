<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaf7fd74e50b70452dbd13a52e0f987d1
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

        spl_autoload_register(array('ComposerAutoloaderInitaf7fd74e50b70452dbd13a52e0f987d1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaf7fd74e50b70452dbd13a52e0f987d1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaf7fd74e50b70452dbd13a52e0f987d1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
