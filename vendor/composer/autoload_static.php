<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit326c52edb90c71717fd7efa008b42e78
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/pagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'App\\core\\App' => __DIR__ . '/../..' . '/core/app.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/core/request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/core/router.php',
        'ComposerAutoloaderInit326c52edb90c71717fd7efa008b42e78' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit326c52edb90c71717fd7efa008b42e78' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit326c52edb90c71717fd7efa008b42e78::$classMap;

        }, null, ClassLoader::class);
    }
}
