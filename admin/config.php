<?php  
	define('URL', 'http://localhost:8080/PROJECT/NOTE/');
	define("HOME_FOLDER", "home/");
	define("HOME_URL", URL."/".HOME_FOLDER);	
	define("PATH", realpath(dirname(__FILE__))."/".HOME_FOLDER."/");
	define('LIB', 'system/lib/');

	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'db_note');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	define('HASH_GENERAL_KEY', 'MixitUp200');

	define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

	define ("SUBDIR", serialize (array ("admin", "user")));


?>