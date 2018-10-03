<?php
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'MageSuite_ContentConstructorFrontend',
    __DIR__
);

$contentConstructorPackagePath = __DIR__.'/../magesuite-content-constructor';

if(file_exists($contentConstructorPackagePath)) {
    \Magento\Framework\Component\ComponentRegistrar::register(
        \Magento\Framework\Component\ComponentRegistrar::MODULE,
        'MageSuite_ContentConstructor',
        realpath($contentConstructorPackagePath)
    );
}
