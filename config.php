<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 12/9/16
 * Time: 9:31 AM
 */
// Always provide a TRAILING SLASH (/) AFTER A PATH

define('URL', 'http://localhost:8000/mvc/');

define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc');
define('DB_USER', 'root');
define('DB_PASS', 'root');

// The sitewide hashkey, do not change this because it's used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');