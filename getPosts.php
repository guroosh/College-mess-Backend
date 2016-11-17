<?php 
	if( $_GET["userId"] ) {
      $userId = $_GET["userId"];

	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	
	$data_array = array();
    $sql = "SELECT * FROM posts ";
	mysql_select_db('mess');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not select company: ' . mysql_error());
	}
	$post_count = 0;
	$id = array();
	$userId_post = array();
	$text = array();
	$imageURL = array();
	$userImageURL = array();
	$upVotes = array();
	$date = array();
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
    {
    	$post_count = $post_count + 1;
        array_push($id, "{$row['id']}");
		array_push($userId_post, "{$row['userId']}");
		array_push($text, "{$row['text']}");
		array_push($imageURL, "{$row['imageURL']}");
		array_push($userImageURL, "{$row['userImageURL']}");
		array_push($upVotes, "{$row['upVotes']}");
		array_push($date, "{$row['date']}");           
    }
    $myLikedPosts = array();
    $myHiddenPosts = array();
    
    for($x=0; $x<$post_count; $x++)
    {
    	$sql = "SELECT * FROM likes WHERE postId = '$id[$x]' AND userId = '$userId' ";
    	mysql_select_db('mess');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
		  die('Could not select likes: ' . mysql_error());
		}
		$myLikesPostsCount = 0;
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	    {
			$myLikesPostsCount++;
	    }
	    if($myLikesPostsCount == 0)
	    {
	    	$myLikedPosts[$x] = 0;
	    }
	    else
	    {
	    	$myLikedPosts[$x] = 1;
	    }

	    $sql = "SELECT * FROM hidden WHERE postId = '$id[$x]' AND userId = '$userId' ";
    	mysql_select_db('mess');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
		  die('Could not select hidden: ' . mysql_error());
		}
		$myHiddenPostsCount = 0;
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	    {
			$myHiddenPostsCount++;
	    }
	    if($myHiddenPostsCount == 0)
	    {
	    	$myHiddenPosts[$x] = 0;
	    }
	    else
	    {
	    	$myHiddenPosts[$x] = 1;
	    }
	    $sql = "SELECT * FROM comments WHERE postId = '$id[$x]' ";
    	mysql_select_db('mess');
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
		  die('Could not select comments: ' . mysql_error());
		}
		$comment_count = 0;
		$comments_array = array();
		$commentId = array();
	    $userId_comment = array();
	    $comment_date = array();
	    $comment_text = array();
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	    {
	    	$comment_count++;
			array_push($commentId, "{$row['id']}");
			array_push($userId_comment, "{$row['userId']}");
			array_push($comment_date, "{$row['date']}");
			array_push($comment_text, "{$row['text']}");
	    }
	    for($y=0; $y<$comment_count; $y++)
	    {
	    	array_push($comments_array, [ 'commentId'=>$commentId[$y], 'userId' => $userId_comment[$y], 'text' => $comment_text[$y], 'date' => $comment_date[$y] ]);  	
	    }
	    array_push($data_array, ['postId'=>$id[$x], 'userId'=> $userId_post[$x], 'text'=> $text[$x], 'imageURL' => $imageURL[$x], 'userImageURL'=> $userImageURL[$x], 'upVotes' => $upVotes[$x], 'date' => $date[$x], 'liked' => $myLikedPosts[$x], 'comments' => $comments_array, 'hidden' => $myHiddenPosts[$x] ]);
    }
    // $res = ['data'=>$data_array];
    $res = $data_array;
	echo json_encode($res);
	mysql_close($conn);
}
  	exit();
?>