<?php
$connection = mysqli_connect('localhost', 'root','abcABC123');
mysqli_select_db($connection, 'pearson');
ini_set('date.timezone', 'UTC');
//date_default_timezone_set('Europe/London');

echo "PHP INI SETTING : " . ini_get('date.timezone') . "</br>";


echo "Current timezone: " . date_default_timezone_get() . "</br>";
$date = new DateTime();
var_dump(new DateTime());

echo "</br>------------------------------------ DateTime Constants -------------------------------------------------</br>";
echo "DATE_ATOM - " . $date->format(DATE_ATOM) . "</br>" ;
echo "DATE_ISO8601 - " . $date->format(DATE_ISO8601) . "</br>" ;
echo "DATE_RFC822 - " . $date->format(DATE_RFC822) . "</br>" ;
echo "DATE_RSS - " . $date->format(DATE_RSS) . "</br>" ;

echo "</br>-------------------------------------- Operation with Date -----------------------------------------------</br>";
echo "Offset to GMT - " . $date->getOffset() . "</br>" ;
echo "Date modify - " . $date->modify('+2 week')->format(DATE_RSS) . "</br>" ;

$date1 = new DateTime("2007-03-24");
$date2 = new DateTime("2009-06-26");


echo "Diff between two dates  - First date " . $date1->format("r") . " Second date ".$date2->format("r")." Different result " . $date1->diff($date2)->format('%y year %d days %h hour'). "</br>" ;


echo "</br>-------------------------------------- Operation with Timezone -----------------------------------------------</br>";
echo "http://www.php.net/manual/en/datetime.configuration.php#ini.date.timezone </br>" ;
echo "Timestamp - " . $date->getTimestamp(). "</br>" ;
$timeZone = new DateTimeZone("AFRICA");
$date->setTimezone($timeZone);
//var_dump($timeZone->getTransitions());
//var_dump($timeZone->listAbbreviations());
var_dump($date);
echo "Timezone offset to GMT - " . $timeZone->getOffset(new DateTime()) . "</br>" ;


echo "</br>-------------------------------------- MYSQL -----------------------------------------------</br>" ;
$sql = "INSERT INTO date_date(my_timestamp, datetime) VALUES(CURRENT_TIMESTAMP, \"" . $date->format("d-m-y H:i:s") . "\")";
echo $sql . "</br>";
mysql_query($sql);


$result = mysql_query('SELECT datetime FROM date_date LIMIT 5');
while ($row = mysql_fetch_assoc($result)) {
$userTimeZone = new DateTimeZone('Europe/Oslo');
if (!empty($row["datetime"])) {
$dt = new DateTime($row["datetime"]);
$dt->setTimezone($userTimeZone);
echo  "</br>" . $dt->format("r") . "</br>";
}
}

echo "</br>-------------------------------------- Prooof links-----------------------------------------------</br>" ;
echo "http://www.worldtimezone.com/index24.php </br>" ;
echo "http://www.sitepoint.com/forums/showthread.php?450107-Difference-between-GMT-and-PST#post3243632</br>" ;


