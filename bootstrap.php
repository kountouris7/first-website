<?php

$config = require 'database/config.php';

require 'router.php';

require 'Connection.php';


require 'QueryBuilder.php';

return new QueryBuilder(

	Connection::make($config['database'])

);