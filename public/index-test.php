<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('You are not allowed to access this file.');
}

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../app/bootstrap.php');
// support .env file
dotenv(dirname(__DIR__))->load();

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/app-test.php');

(new \app\web\Application($config))->run();