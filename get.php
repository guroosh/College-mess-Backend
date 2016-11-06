<?php
   if( $_GET["name"] || $_GET["age"] ) {
      $data = [ 'name' => $_GET["name"], 'age' => $_GET["age"] ];
      echo json_encode($data);
      exit();
   }
?>
