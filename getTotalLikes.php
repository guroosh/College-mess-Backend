<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$count_array = array();

$sql = "SELECT * FROM menu_items";
mysql_select_db('mess');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not select meal: ' . mysql_error());
}

while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    array_push($count_array, "{$row['up']}");
}
$count=0;
for($x = 0; $x<count($count_array); $x++)
{
    $count= $count +$count_array[$x];
}
$res = ['count' => $count];
echo json_encode($res);
mysql_close($conn);
exit();
