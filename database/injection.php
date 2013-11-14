<?php
include_once('db.php');
#!/bin/sh
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
echo 'Success... ' . $mysqli->host_info . "\n";

if ($mysqli->query(
        "CREATE TEMPORARY TABLE `test_data` (
          `id` int(10) unsigned NOT NULL,
          `name` varchar(255) CHARACTER SET utf8 NOT NULL,
          `score` int(10) unsigned NOT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;"
    ) === true) {
    printf("Table test_data successfully created.\n");
}

$mysqli->query("INSERT INTO `test_data` (`id`, `name`, `score`) VALUES (1, 'Slava', 1), (2, 'Serg', 3), (3, 'valera', 4), (4, 'brat valeru', 5);");

//$input = (int) $argv[1];
$input = mysql_real_escape_string($argv[1]);


$res = $mysqli->query("SELECT * FROM `test_data` WHERE `score` =\"$input\"");
while ($row = $res->fetch_assoc()) {
    echo "Name name = " . $row['name'] . ",       id = " . $row['id'] . PHP_EOL;
}

$mysqli->close();
