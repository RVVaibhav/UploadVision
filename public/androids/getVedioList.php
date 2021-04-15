<?php
header('Content-Type: application/json; charset=utf-8');
$allow=true;
include("Config.php");


$cat_id=$_POST['cat_id'];


  $result=$con->selectByCategories("video_tutorials",$cat_id);
        if($result==true){
        	     while($row=$result->fetch_assoc()){
            	   $id=$row['id'];
            	   $title=$row['title'];
            	   $headers_one=$row['headers_one'];
            	   $image=$row['thumbimage'];
            	   $headers_two=$row['headers_two'];
                 $headers_three=$row['headers_three'];
            	   $user_id=$row['admin_id'];
                 $vedio=$row['vedio'];
                 $start_date=$row['start_date'];
                 $expire_date=$row['expire_date'];
                 $updated_at=$row['updated_at'];
                 $created_at=$row['created_at'];
            	   $huntygo['ht'][] = array('stk' => 'success','category_name' =>$category,'id'=>$id,'vedio'=>$vedio,
                'title' =>$title,'image'=>$image,'start_date' =>$start_date,'expire_date'=>$expire_date,'user_id' =>$user_id,'created_at'=>$created_at,'updated_at' =>$updated_at);
        	 }

        }
	   else
	    {
            $huntygo['ht'][] = array('stk' => 'unsuccess');
        }
echo json_encode($huntygo,JSON_PRETTY_PRINT);
?>
