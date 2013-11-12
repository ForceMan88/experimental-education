<?php
$settings = parse_ini_file("config.ini");
define("DB_HOST", $settings['db_host']);
define("DB_USERNAME", $settings['db_username']);
define("DB_PASSWORD", $settings['db_password']);
define("DB_NAME", $settings['db_name']);