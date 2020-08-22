<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc26d9eefc015a1e0200b4aa9e9aa3e9d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Source',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Pimple\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Container.php',
        'Pimple\\ServiceProviderInterface' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
        'Pimple\\Tests\\Fixtures\\Invokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Invokable.php',
        'Pimple\\Tests\\Fixtures\\NonInvokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/NonInvokable.php',
        'Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
        'Pimple\\Tests\\Fixtures\\Service' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Service.php',
        'Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
        'Pimple\\Tests\\PimpleTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleTest.php',
        'Source\\Conn' => __DIR__ . '/../..' . '/src/Source/Conn.php',
        'Source\\IConn' => __DIR__ . '/../..' . '/src/Source/IConn.php',
        'Source\\IServiceProduct' => __DIR__ . '/../..' . '/src/Source/IServiceProduct.php',
        'Source\\Product' => __DIR__ . '/../..' . '/src/Source/Product.php',
        'Source\\ServiceProduct' => __DIR__ . '/../..' . '/src/Source/ServiceProduct.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc26d9eefc015a1e0200b4aa9e9aa3e9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc26d9eefc015a1e0200b4aa9e9aa3e9d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc26d9eefc015a1e0200b4aa9e9aa3e9d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc26d9eefc015a1e0200b4aa9e9aa3e9d::$classMap;

        }, null, ClassLoader::class);
    }
}