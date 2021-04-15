<?php
header('Content-Type: application/json; charset=utf-8');
$allow=true;
include("Config.php");

  $result=$con->selectStudyTipsData("reading_stuff_text");
        if($result==true){
        	     while($row=$result->fetch_assoc()){
            	  $id=$row['id'];
            	   $title=$row['title'];
                 $description=$row['description'];
                 $createdBy=$row['createdBy'];
            	   $created_at=$row['created_at'];
            	   $updated_at=$row['updated_at'];
            	    $huntygo['ht'][] = array('stk' => 'success','id' =>$id,
                 'title' =>$title,'description' =>$description,'createdBy' =>$createdBy,'created_at' =>$created_at,'updated_at' =>$updated_at);

        	 }

        }
	   else
	    {
            $huntygo[] = array('stk' => 'unsuccess');
        }
      echo json_encode($huntygo,JSON_PRETTY_PRINT);
?>
