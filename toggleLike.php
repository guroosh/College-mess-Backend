<?php 
	if( $_GET["userId"] && $_GET["postId"])
	{
      $userId = $_GET["userId"];
      $postId = $_GET["postId"];
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	
    $sql = "SELECT * FROM likes WHERE userId = '$userId' AND postId = '$postId'";
	mysql_select_db('mess');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not select company: ' . mysql_error());
	}
	$count = 0;
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
    {
    	$count++;           
    }

    $sql = "SELECT * FROM posts WHERE id = '$postId'";
	mysql_select_db('mess');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not select posts: ' . mysql_error());
	}
	$post_count = 0;
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
    {
    	$post_count++;           
    }
    if($post_count == 0)
    {
    	echo json_encode('0');
    	mysql_close($conn);
    	die();
    }

    if($count == 1)
    {
    	$sql = "DELETE FROM likes WHERE userId = '$userId' AND postId = '$postId'";
    	mysql_select_db('mess');
    	$retval = mysql_query( $sql, $conn );
    	if(! $retval )
		{
		  die('Could not delete like: ' . mysql_error());
		}

        $sql = "UPDATE posts SET upVotes = upVotes - 1 WHERE id = '$postId'";
        mysql_select_db('mess');
        $retval = mysql_query( $sql, $conn );
        if(! $retval )
        {
            die('Could not delete like: ' . mysql_error());
        }
    }
    else if($count == 0)
    {
    	$sql = "INSERT INTO likes(userId, postId) VALUES ('$userId', '$postId')";
    	mysql_select_db('mess');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
		  die('Could not add like: ' . mysql_error());
		}
        $sql = "UPDATE posts SET upVotes = upVotes + 1 WHERE id = '$postId'";
        mysql_select_db('mess');
        $retval = mysql_query( $sql, $conn );
        if(! $retval )
        {
            die('Could not delete like: ' . mysql_error());
        }
    }
    else
    {
    	echo json_encode('0');
    	mysql_close($conn);
    }
	echo json_encode('1');
	mysql_close($conn);
}
  	exit();
?>