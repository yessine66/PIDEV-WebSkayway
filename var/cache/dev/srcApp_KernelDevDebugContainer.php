<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCDxMfoY\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCDxMfoY/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCDxMfoY.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCDxMfoY\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCDxMfoY\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CDxMfoY',
    'container.build_id' => 'a772bcf1',
    'container.build_time' => 1620180369,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCDxMfoY');
