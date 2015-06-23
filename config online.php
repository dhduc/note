<?php  
	define('SITE', 'http://note.16mb.com');
	define("FOLDER", "application");
	define("HOME_URL", SITE."/".FOLDER);
	define("ROOT", realpath(dirname(__FILE__))."/");
	define("PATH", realpath(dirname(__FILE__)));
	define('LIB', 'system/lib/');

	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'mysql.hostinger.vn');
	define('DB_NAME', 'u437101895_note');
	define('DB_USER', 'u437101895_note');
	define('DB_PASS', 'micheal2107');

	define('HASH_GENERAL_KEY', 'MixitUp200');

	define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

	define ("SUBDIR", serialize (array ("admin" => "dashboard", "user" => "dashboard")));
	define("ADMIN_URL", SITE."/admin");
	define("USER_URL", SITE."/user");



?>