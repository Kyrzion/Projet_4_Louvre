<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerARBeBCc\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerARBeBCc/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerARBeBCc.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerARBeBCc\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerARBeBCc\srcDevDebugProjectContainer([
    'container.build_hash' => 'ARBeBCc',
    'container.build_id' => '1111febb',
    'container.build_time' => 1557825308,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerARBeBCc');
