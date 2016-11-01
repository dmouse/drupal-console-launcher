<?php

$loader = require __DIR__ . '/../vendor/autoload.php';

$loader->setPsr4('Drupal\\ConsoleLauncher\\Tests\\', __DIR__ . '/Test');

return $loader;