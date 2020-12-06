<?php

require_once 'vendor/autoload.php';
require_once 'HelloHandler.php';
require_once 'HtmlRenderer.php';

use Boneng\AppFactory;
use Boneng\App;

$app = AppFactory::create("boneng-example", new HtmlRenderer());
$app->addHandler(new HelloHandler());
$app->run();