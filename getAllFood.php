<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$bfast = array();
$lunch = array();
$eveng = array();
$diner = array();

date_default_timezone_set('Asia/Kolkata');
$week_day = date("N");

$data_array = array();
$sql = "SELECT * FROM day_meal";
mysql_select_db('mess');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not select meal: ' . mysql_error());
}

$count = 0;
$name = array();
$meal = array();
$day = array();

while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    $count = $count + 1;
    array_push($name, "{$row['name']}");
    array_push($meal, "{$row['meal']}");
    array_push($day, "{$row['day']}");
}


$res = ['size' => $count, 'name' => $name, 'meal' => $meal, "day" => $day];


echo (json_encode($res));
mysql_close($conn);
exit();
