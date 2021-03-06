<?php

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../app/bootstrap.php');
// support .env file
dotenv(dirname(__DIR__))->load();

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', env('APP_DEBUG', false));
defined('YII_ENV') or define('YII_ENV', env('APP_ENV', 'production'));

require(__DIR__ . '/../app/web/Yii.php');

$config = \yii\helpers\ArrayHelper::merge(
	require(__DIR__ . '/../config/app-web.php'),
	require(__DIR__ . '/../config/rbac.php')
);

(new \app\web\Application($config))->run();
