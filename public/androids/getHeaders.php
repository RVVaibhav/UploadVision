<?php
header('Content-Type: application/json; charset=utf-8');
$allow=true;
include("Config.php");

$test_header_1_id=$_POST['test_header_1_id'];
$test_header_2_id=$_POST['test_header_2_id'];


  $result=$con->selectHeaders("test_header_3",$test_header_1_id,$test_header_2_id);
        if($result==true){
        	     while($row=$result->fetch_assoc()){
            	   $test_header_3_id=$row['test_header_3_id'];
            	   $test_header_1_id=$row['test_header_1_id'];
                   $test_header_2_id=$row['test_header_2_id'];
            	   $test_header_3=$row['test_header_3'];
            
            	    $huntygo['ht'][] = array('stk' => 'success','test_header_3_id' =>$test_header_3_id,
                 'test_header_1_id' =>$test_header_1_id,'test_header_2_id' =>$test_header_2_id,'test_header_3' =>$test_header_3);
        	 }

        }
	   else  {
            $huntygo['ht'][] = array('stk' => 'unsuccess');
        }
echo json_encode($huntygo,JSON_PRETTY_PRINT);
?>

