<?php
/**
 * Created by PhpStorm.
 * User: Guroosh Chaudhary
 * Date: 28-11-2016
 * Time: 19:01
 */

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$mailing = array();
$feedback = array();

$sql = "SELECT * FROM links";
mysql_select_db('mess');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not select meal: ' . mysql_error());
}

while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    array_push($mailing, "{$row['mailing']}");
    array_push($feedback, "{$row['feedback']}");
}
$res = ['mailing' => $mailing[0], 'feedback' => $feedback[0]];
echo json_encode($res);
mysql_close($conn);
exit();
