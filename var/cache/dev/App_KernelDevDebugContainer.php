<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLEIknp8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLEIknp8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLEIknp8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLEIknp8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLEIknp8\App_KernelDevDebugContainer([
    'container.build_hash' => 'LEIknp8',
    'container.build_id' => '468e4ea1',
    'container.build_time' => 1633703579,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLEIknp8');
