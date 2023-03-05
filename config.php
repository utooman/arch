<?php
// HTTP
$host = $_SERVER['HTTP_HOST'];
define('HTTP_SERVER', 'https://' . $host . '/');
define('HTTP_IMAGE', 'https://' . $host . '/image/');

// HTTPS
define('HTTPS_SERVER', 'https://' . $host . '/');

// DIR
$dir = dirname(__FILE__);
define('DIR_APPLICATION', $dir . '/catalog/');
define('DIR_SYSTEM', $dir . '/system/');
define('DIR_DATABASE', $dir . '/system/database/');
define('DIR_LANGUAGE', $dir . '/catalog/language/');
define('DIR_TEMPLATE', $dir . '/catalog/view/theme/');
define('DIR_CONFIG', $dir . '/system/config/');
define('DIR_IMAGE', $dir . '/image/');
define('DIR_CACHE', $dir . '/system/cache/');
define('DIR_DOWNLOAD', $dir . '/download/');
define('DIR_LOGS', $dir . '/system/logs/');

// DB
define('DB_DRIVER', 'mysql');
//define('DB_DRIVER', 'mysqliz');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'archeton_com_ua');
define('DB_PASSWORD', 'Jj6.hE1z5!rPI2');
define('DB_DATABASE', 'archeton_com_ua');
define('DB_PREFIX', '');
?>