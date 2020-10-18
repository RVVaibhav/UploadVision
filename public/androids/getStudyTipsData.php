<?php
header('Content-Type: application/json; charset=utf-8');
$allow=true;
include("Config.php");

$type=$_POST['type'];



  $result=$con->selectStudyTipsData("study_tips_data",$type);
        if($result==true){
        	     while($row=$result->fetch_assoc()){
            	   $id=$row['id'];
            	   $title=$row['title'];
                   $description=$row['description'];
            	   $type=$row['type'];
                   $createdBy=$row['createdBy'];
            	   $attachment=$row['attachment'];
                   $created_at=$row['created_at'];
            	   $updated_at=$row['updated_at'];


            	    $huntygo['ht'][] = array('stk' => 'success','id' =>$id,
                 'title' =>$title,'description' =>$description,'type' =>$type,'createdBy' =>$createdBy,
                 'attachment' =>$attachment,'created_at' =>$created_at,'updated_at' =>$updated_at);
        	 }

        }
	   else  {
            $huntygo['ht'][] = array('stk' => 'unsuccess');
        }
echo json_encode($huntygo,JSON_PRETTY_PRINT);
?>
