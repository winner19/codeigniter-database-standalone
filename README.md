#Codeigniter Database

This repository imported from https://github.com/evolutionscript/codeigniter-database-standalone

Use the Database Library separately from CodeIgniter 3.

## Installation

###With Composer
```json
"require": {
    // ...
    "evolution/codeigniterdb":  "dev-master"
}
```

###Without Composer

You can also download it from Github, but no autoloader is provided so you'll need to register it with your own PSR-0 compatible autoloader.

#Usage
```php
<?php
use Evolution\CodeIgniterDB as CI;
$db_data = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'my_password',
	'database' => 'my_database',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
$db =& CI\DB($db_data);
```
For more information visit <a href="http://www.codeigniter.com/userguide3/database/index.html">CodeIgniter user guide</a>.
