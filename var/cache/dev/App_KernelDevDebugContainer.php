<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMcVznzc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMcVznzc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMcVznzc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMcVznzc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMcVznzc\App_KernelDevDebugContainer([
    'container.build_hash' => 'McVznzc',
    'container.build_id' => 'f70ad898',
    'container.build_time' => 1589662549,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMcVznzc');
