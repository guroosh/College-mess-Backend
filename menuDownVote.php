<?php

$request_body = file_get_contents('php://input');
$json = json_decode($request_body);

$flag = $json->{'flag'};
$name = $json->{'name'};


date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d h:i:sa");

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysql_error());
}

$sql = "UPDATE menu_items SET down = down + '$flag' WHERE name = '$name' ";

mysql_select_db('mess');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
    die('Could not add data: ' . mysql_error());
}
mysql_close($conn);
echo("1");
exit();