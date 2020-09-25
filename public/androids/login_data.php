<?php
header('Content-Type: application/json; charset=utf-8');
include("Config.php");
date_default_timezone_set('Asia/Kolkata');
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $password=sha1($pass);
    $result=$con->login($email,$password);
	  $cnt=mysqli_num_rows($result);
//	echo $cnt; exit;
	 if($cnt > 0){
		while($row=mysqli_fetch_assoc($result)){
	   $fname=$row['user_name'];
	   $email=$row['user_email'];
     $mobile=$row['user_mobile'];
	   $id=$row['user_id'];
	   $key=$row['user_password'];
     $ugC = $row['ug_college'];
     $city = $row['city'];
	   $state= $row['state'];



    }
       $profile = array('stk' => 'success','key' =>$key,'id' =>$id,'mobile'=>$mobile,'name'=>$fname,'email'=>$email,'ugC'=>$ugC,'city'=>$city,'state'=>$state,'Code'=>'200');
     //  header("location:https://m.huntygo.com?mobile=$mobile");
	   }
	   else {
    $profile = array('stk' => 'unsuccess','Code'=>'201');
}
//echo $mhb;
echo json_encode($profile,JSON_PRETTY_PRINT);

?>
