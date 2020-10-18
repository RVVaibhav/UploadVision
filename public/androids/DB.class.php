<?php
class DB {
    public $connection;
    private $host;
    private $user;
    private $password;
    private $database;
    public $table;
    function __construct($host, $user, $password, $database) {
        $this->host       = $host;
        $this->user       = $user;
        $this->password   = $password;
        $this->database   = $database;
        $this->connection=mysqli_connect($this->host,$this->user,$this->password,$this->database);
		//$this->connection = mysqli_connect('localhost', 'username', 'password', 'dbname');
        // Check connection
        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";
    }

    //-----------------------------------------------------------------------------------------------------
    public function close() {
        try {
            mysqli_close($this->connection);
        }
        catch (Exception $Ex) {
            echo $Ex;
        }
    }
        public function getData($mobile) {
        try {
             $sql ="select * from vision_registration where `user_mobile`='$mobile';";
        //    echo $sql;
          //  exit;
            $result = mysqli_query($this->connection, $sql);
            //var_dump($result);
           // exit;
            return $result;
        }
        catch (Exception $Ex) {
            echo $Ex;
        }
    }

    public function getResult($test_id) {
    try {
         $sql ="select * from result_test_questions where `test_id` ='$test_id';";
      // echo $sql;
      //  exit;
        $result = mysqli_query($this->connection, $sql);
        //var_dump($result);
       // exit;
        return $result;
    }
    catch (Exception $Ex) {
        echo $Ex;
    }
}


    public function getDataWallet($user_mobile,$dates) {
    try {
         $sql ="SELECT * FROM wallet WHERE `mobile`='$user_mobile' AND `date`='$dates'";
         //echo $sql;
      //  exit;
        $result = mysqli_query($this->connection, $sql);
        //var_dump($result);
       // exit;
        return $result;
    }
    catch (Exception $Ex) {
        echo $Ex;
    }
}

public function selectHeaders($table,$test_header_1_id,$test_header_2_id) {
try {
     $sql ="SELECT * FROM $table WHERE `test_header_1_id`='$test_header_1_id' AND `test_header_2_id`='$test_header_2_id'";
     //echo $sql;
  //  exit;
    $result = mysqli_query($this->connection, $sql);
    //var_dump($result);
   // exit;
    return $result;
}
catch (Exception $Ex) {
    echo $Ex;
}
}

public function selectStudyTipsData($table,$type) {
try {
     $sql ="SELECT * FROM $table WHERE `type`='$type'";
     //echo $sql;
  //  exit;
    $result = mysqli_query($this->connection, $sql);
    //var_dump($result);
   // exit;
    return $result;
}
catch (Exception $Ex) {
    echo $Ex;
}
}

     public function selectMyInterest($vid,$cid) {

        //$f= Where $f='$v'
        try {
             $sql ="SELECT * FROM wishlist WHERE  vid='$vid' AND cid ='$cid'";
             //echo $sql;
            //exit;
            $result = mysqli_query($this->connection, $sql);
            //var_dump($result);
           // exit;
            return $result;
        }
        catch (Exception $Ex) {
            echo $Ex;
        }
    }

    public function login($email,$password) {
      try {
          $sql    = "SELECT * FROM `vision_registration` WHERE `user_email`='$email' AND `user_password`='$password'";
        //echo $sql;
          //exit;
          $result = mysqli_query($this->connection, $sql);
          return $result;
      }
      catch (Exception $Ex) {
          echo $Ex;
      }
  }

  public function insertResult($table,$fields,$values) {
      try {
          $this->table=$table;
          $fields = implode('`,`', $fields);
          $values = implode("','", $values);
          $sql    = 'INSERT INTO ' . $this->table . ' (`' . $fields . "`) VALUES ('" . $values . "')";
         //redirect('location:index.php');
        //   echo $sql;
           //exit;
          $result = mysqli_query($this->connection, $sql);
          if ($result) {
              return $result;
          } else {
              return mysqli_error($this->connection);
          }
      }
      catch (Exception $Ex) {
          echo $Ex;
      }
  }


    public function insert($table,$rfields,$rvalues) {
        try {

            $this->table=$table;
            $fields = implode('`,`', $rfields);
            $values = implode("','", $rvalues);
            $sql    = 'INSERT INTO ' . $this->table . ' (`' . $fields . "`) VALUES ('" . $values . "')";


	           //redirect('location:index.php');
            echo $sql;
           //  exit;
            $result = mysqli_query($this->connection, $sql);
            if ($result) {
                return $result;
            } else {
                return mysqli_error($this->connection);
            }
        }
        catch (Exception $Ex) {
            echo $Ex;
        }
    }
    public function lastid() {
        try {
            return $result = mysqli_insert_id($this->connection);

        }
        catch (Exception $Ex) {
            echo $Ex;
        }
    }

    /*------------------------------------------------------------------------------*/

    public function selectByCategories($table,$name) {
        try {
           $sql= "select * from $table where `video_cat` ='$name'";
          // echo $sql;
          // exit;
             $result = mysqli_query($this->connection, $sql);
            return $result;
        }
        catch (Exception $Ex) {
            echo $Ex;
        }
}

public function selectByCategoriesP($table,$name) {
    try {
       $sql= "select * from $table where `pdf_cat` ='$name'";
      // echo $sql;
      // exit;
         $result = mysqli_query($this->connection, $sql);
        return $result;
    }
    catch (Exception $Ex) {
        echo $Ex;
    }
}

public function selectBystatus($table) {

        //$f= Where $f='$v'
        try {
           $sql = "select * from $table";
            //echo $sql;
           //exit;
            $result = mysqli_query($this->connection, $sql);
           return $result;
       }
       catch (Exception $Ex) {
           echo $Ex;
       }
    }

    public function selectState($table) {

            //$f= Where $f='$v'
            try {
               $sql = "select * from $table";
              //echo $sql;
               //exit;
                $result = mysqli_query($this->connection, $sql);
               return $result;
           }
           catch (Exception $Ex) {
               echo $Ex;
           }
        }

  public function selectComponent($table) {

            //$f= Where $f='$v'
            try {
               $sql = "select * from $table";
             // echo $sql;
              //exit;
                $result = mysqli_query($this->connection, $sql);
               return $result;
           }
           catch (Exception $Ex) {
               echo $Ex;
           }
        }

  public function selectTestList($table) {

            //$f= Where $f='$v'
            try {
               $sql = "select * from $table";
               //echo $sql;
               //exit;
                $result = mysqli_query($this->connection, $sql);
               return $result;
           }
           catch (Exception $Ex) {
               echo $Ex;
           }
        }



        public function selectDataTestBySub($table,$cat_id) {

                  //$f= Where $f='$v'
                  try {
                     $sql = "select * from $table where `test_header_3_id` ='$cat_id'";
                    // echo $sql;
        //(select question_id from loot_cutieadmin.questions_in_test where test_id ='$test_id')
                    // exit;
                      $result = mysqli_query($this->connection, $sql);
                     return $result;
                 }
                 catch (Exception $Ex) {
                     echo $Ex;
                 }
              }


public function selectQuestions($table_one,$table_two,$test_id) {

          //$f= Where $f='$v'
          try {
             $sql = "select qb.question_id,qb.subject_group_id,qb.question_type,qb.question,qb.option_1,qb.option_2,qb.option_3,qb.option_4,qb.option_5,
qb.correct_option,qb.questions_selection_count,qb.admin_id,qb.created_at,qb.updated_at FROM $table_one qb JOIN
$table_two qt ON qb.question_id = qt.question_id;";
           //  echo $sql;
//(select question_id from loot_cutieadmin.questions_in_test where test_id ='$test_id')
            // exit;
              $result = mysqli_query($this->connection, $sql);
             return $result;
         }
         catch (Exception $Ex) {
             echo $Ex;
         }
      }


}
?>
