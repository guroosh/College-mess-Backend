<?php
if( $_GET["new_feedback"])
{
    $feedback = $_GET["new_feedback"];
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
        die('Could not connect: ' . mysql_error());
    }

    $sql = "UPDATE links SET feedback = '$feedback'";
    mysql_select_db('mess');
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
        die('Could not select company: ' . mysql_error());
    }
    echo json_encode('1');
    mysql_close($conn);
}
exit();
