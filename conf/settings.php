<?php
define('HEADERS', '');
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'work_1');

$PATH = new stdClass;
$PATH->headers = $CONF->root . "/includes/headers";
$PATH->footers = $CONF->root . "/includes/footers";
$PATH->menus = $CONF->root . "/includes/menus";
$PATH->pages = $CONF->root . "/includes/pages";
$PATH->classes = $CONF->root . "/class";

require_once($PATH->classes . "/db/class-db.php");
require_once($PATH->classes . "/user.php");
$DB = new db(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
