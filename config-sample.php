<?php  
	define('SITE', 'http://note.local');
	define("FOLDER", "application");
	define("HOME_URL", SITE."/".FOLDER);
	define("ROOT", realpath(dirname(__FILE__))."/");
	define("PATH", realpath(dirname(__FILE__)));
	define('LIB', 'system/lib/');

	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'note');
	define('DB_USER', 'root');
	define('DB_PASS', 'root');

	define('HASH_GENERAL_KEY', 'MixitUp200');

	define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

	define ("SUBDIR", serialize (array ("admin" => "dashboard", "user" => "dashboard")));
	define("ADMIN_URL", SITE."/admin");
	define("USER_URL", SITE."/user");



?>