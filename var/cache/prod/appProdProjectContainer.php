<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRgatakn\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRgatakn/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerRgatakn.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerRgatakn\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerRgatakn\appProdProjectContainer(array(
    'container.build_hash' => 'Rgatakn',
    'container.build_id' => '1aca3a35',
    'container.build_time' => 1536575461,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRgatakn');
