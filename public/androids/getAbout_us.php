<?php
header('Content-Type: application/json; charset=utf-8');
$allow=true;
include("Config.php");

$type=$_POST['type'];


  $result=$con->selectAboutDatas("vision_about_us");
        if($result==true){
        	     while($row=$result->fetch_assoc()){
            	    $id=$row['id'];
            	    $name=$row['name'];
                  $education=$row['education'];
                  $description=$row['description'];
                  $attachment=$row['attachment'];
                  $admin_id=$row['admin_id'];
                  $createdBy=$row['createdBy'];
                  $created_at=$row['created_at'];
            	    $updated_at=$row['updated_at'];
            	    $huntygo['qt'][] = array('stk' => 'success','id' =>$id,
                 'name' =>$name,'created_at' =>$created_at,'updated_at' =>$updated_at,
                 'education' =>$education,'description' =>$description,'attachment' =>$attachment,
                 'admin_id' =>$admin_id,'createdBy' =>$createdBy);
        	 }

        }
	   else  {
            $huntygo['ht'][] = array('stk' => 'unsuccess');
        }
echo json_encode($huntygo,JSON_PRETTY_PRINT);
?>
