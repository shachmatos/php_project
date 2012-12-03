<?php
$CONF = new stdClass();
// $CONF->root = substr($_SERVER['PHP_SELF'],0, (strlen($_SERVER['PHP_SELF']) - strlen(basename($_SERVER['PHP_SELF'])) -1));
$CONF->root = dirname(__FILE__);
require_once($CONF->root . '/conf/settings.php');
