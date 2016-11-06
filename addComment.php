<?php
   
    $request_body = file_get_contents('php://input');
    $json = json_decode($request_body);
    
    $userId = $json->{'userId'};
    $text = $json->{'text'};
    $postId = $json->{'postId'};
    $date = $json->{'date'};

    $dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}

    $sql = "INSERT INTO comments (userId, text, postId, date) VALUES ('$userId', '$text', '$postId', '$date')";
	mysql_select_db('mess');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not add data: ' . mysql_error());
	}
	mysql_close($conn);
    echo("1");  
    exit();
   
?>