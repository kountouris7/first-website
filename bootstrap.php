<?php


$app =[];

$app['config'] = require 'database/config.php';

require 'router.php';

require 'request.php';

require 'connection.php';

require 'QueryBuilder.php';

$app['database'] = new QueryBuilder(

	Connection::make($app['config']['database'])

);
