<?php
header('Content-Type: application/json; charset=utf-8');
$allow=true;
include("Config.php");

$cat_id=$_POST['cat_id'];

  $result=$con->selectDataTestBySub("test_details",$cat_id);
  if($result==true){
         while($row=$result->fetch_assoc()){
          $test_id=$row['test_id'];
          $test_header_3_id=$row['test_header_3_id'];
          $test_header_1_id=$row['test_header_1_id'];
          $test_header_2_id=$row['test_header_2_id'];
          $test_header_4_id=$row['test_header_4_id'];
          $test_name=$row['test_name'];
          $test_category=$row['test_category'];
          $test_group=$row['test_group'];
          $incorrect_score=$row['incorrect_score'];
          $min_percent=$row['min_percent'];
          $description=$row['description'];
          $duration=$row['duration'];
          $start_date=$row['start_date'];
          $expire_date=$row['expire_date'];
          $attempt_limit=$row['attempt_limit'];
          $correct_score=$row['correct_score'];
          $num_questions=$row['num_questions'];
          $total_marks=$row['total_marks'];
          $is_view_correct_answers_allowed=$row['is_view_correct_answers_allowed'];
          $incorrect_score=$row['incorrect_score'];
          $created_at=$row['created_at'];
          $updated_at=$row['updated_at'];
          $admin_id=$row['admin_id'];


             $huntygo['ht'][] = array('stk' => 'success','test_category'=>$test_category,'test_group'=>$test_group,'min_percent'=>$min_percent,'test_id' =>$test_id,'test_header_3_id'=>$test_header_3_id,
            'test_header_1_id' =>$test_header_1_id,'test_header_2_id'=>$test_header_2_id,'num_questions' =>$num_questions,'total_marks' =>$total_marks,
            'test_header_4_id' =>$test_header_4_id,'test_name'=>$test_name,'description' =>$description,'duration'=>$duration,
            'start_date' =>$start_date,'expire_date'=>$expire_date,'attempt_limit' =>$attempt_limit,'incorrect_score'=>$incorrect_score,
            'correct_score' =>$correct_score,'is_view_correct_answers_allowed' =>$is_view_correct_answers_allowed,'created_at' =>$created_at,'updated_at' =>$updated_at,'admin_id' =>$admin_id);
      }
  }
else{
      $huntygo[] = array('stk' => 'unsuccess');
  }
echo json_encode($huntygo,JSON_PRETTY_PRINT);
?>
