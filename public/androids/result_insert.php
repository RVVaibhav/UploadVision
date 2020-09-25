<?php
header('Content-Type: application/json; charset=utf-8');
include("Config.php");
date_default_timezone_set('Asia/Kolkata');


        $user_id=$_POST['user_id'];
        $test_id=$_POST['test_id'];
        $is_attempted=$_POST['is_attempted'];
        $question_id=$_POST['question_id'];
        $selected_option=$_POST['selected_option'];
        $is_tagged=$_POST['is_tagged'];
        $created_at=date("Y-m-d");
      	$updated_at=date("Y-m-d");
        $fields=array('user_id','test_id','is_attempted','question_id','selected_option','is_tagged','created_at','updated_at');
        $values=array($user_id,$test_id,$is_attempted,$question_id,$selected_option,$is_tagged,$created_at,$updated_at);
        $result_insert=$con->insertResult('result_test_questions',$fields,$values);
      //	echo $result_insert  ; exit;
   if($result_insert){
     $profile = array('stk' => 'success','Code' => '200');

	   }else {
    $profile = array('stk' => 'unsucces','Code' => '400');
}

echo json_encode($profile,JSON_PRETTY_PRINT);

?>
