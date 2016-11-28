<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$count = array();
$name = array();

$sql = "SELECT * FROM menu_items ORDER BY up DESC LIMIT 10";
mysql_select_db('mess');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not select meal: ' . mysql_error());
}

while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    array_push($count, "{$row['up']}");
    array_push($name, "{$row['name']}");
}
$res = ['count' => $count, 'name' => $name];
echo json_encode($res);
mysql_close($conn);
exit();
