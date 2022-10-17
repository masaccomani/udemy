<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe5de4b9a0a386607820f27ac9deef85
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

        spl_autoload_register(array('ComposerAutoloaderInitfe5de4b9a0a386607820f27ac9deef85', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe5de4b9a0a386607820f27ac9deef85', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe5de4b9a0a386607820f27ac9deef85::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
