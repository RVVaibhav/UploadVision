<?php
header('Content-Type: application/json; charset=utf-8');
include("Config.php");
date_default_timezone_set('Asia/Kolkata');

        $name=$_POST['user_name'];
        $email=$_POST['user_email'];
        $mobile=$_POST['user_mobile'];
        $password=$_POST['user_password'];
        $ugC=$_POST['ug_college'];
        $city=$_POST['city'];
        $state=$_POST['state'];
      	$passcode=sha1($password);
        $time_now=mktime(date('h')+5,date('i')+30,date('s'));
        $created =date("Y-m-d");

       $fields=array('user_name','user_email','user_password','user_mobile','ug_college','city','state','created_at','updated_at');

       $values=array($name,$email,$passcode,$mobile,$ugC,$city,$state,$time_now,$time_now);
       $result_insert=$con->insert('vision_registration',$fields,$values);
    //	echo $result_insert  ; exit;
   if($result_insert){
      $result=$con->getData($mobile);
      $cnt=mysqli_num_rows($result);
     if($cnt > 0){
       while($row=mysqli_fetch_assoc($result)){
                   $mobile=$row['user_mobile'];
         	   $fname=$row['user_name'];
         	   $email=$row['user_email'];
         	   $id=$row['user_id'];
         	   $key=$row['user_password'];
                   //$otp=$row['otp'];
       }
        $profile = array('stk' => 'success','key' =>$key,'id' =>$id,'mobile'=>$mobile,'name'=>$fname,'email'=>$email,'Code' => '200');
      }
	   }else {
    $profile = array('stk' => 'unsucces','Code' => '400');
}

echo json_encode($profile,JSON_PRETTY_PRINT);

?>
