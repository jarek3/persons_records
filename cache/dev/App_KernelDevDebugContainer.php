<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQAh1FMQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQAh1FMQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQAh1FMQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQAh1FMQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQAh1FMQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'QAh1FMQ',
    'container.build_id' => '6c3aa3e2',
    'container.build_time' => 1649648920,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQAh1FMQ');
