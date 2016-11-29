<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$url = array();


$sql = "SELECT * FROM links";
mysql_select_db('mess');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not select meal: ' . mysql_error());
}



while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    array_push($url, "{$row['feedback']}");
}


$res = $url[0];


echo (json_encode($res));
mysql_close($conn);
exit();