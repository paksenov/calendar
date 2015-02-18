<?php

require(__DIR__ . '/../src/BastianAllgeier/Bootstrap.php');
$loader = new BastianAllgeier\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('BastianAllgeier', __DIR__ . '/../src/BastianAllgeier/');
