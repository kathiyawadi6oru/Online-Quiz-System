<?php
     include_once 'connection.php';
    session_start();
    if(!(isset($_SESSION['user'])))
    {
        header("location:../login.php");
    }
    else
    {
        $name = $_SESSION['user'];
        include_once 'connection.php';
        
        if(isset($_POST['submit']))
        {
            $eid=$_GET['eid'];
            $ans=$_POST['ans'];
            $q_id=$_GET['qid'];
            $number =$_GET['number'];
            
            $result=mysqli_query($con,"SELECT * FROM student WHERE stud_code='$name' " );
            $row1 = mysqli_num_rows($result);
            if($row1 == 1 )
            {
               
                $num1 = mysqli_fetch_assoc($result);
                $stud_id = $num1['stud_id'];
                $result1=mysqli_query($con,"SELECT * FROM question WHERE q_id='$q_id' " );
                $row = mysqli_num_rows($result1);
                if($row == 1 )
                {
                     
                    $num = mysqli_fetch_assoc($result1);
                    $true_op = $num['true_option'];
                    if($true_op == $ans)
                    {
                        $rst = "true";
                    }
                    else
                    {
                        $rst = "false";
                    }
                /*echo $q_id;
                    echo $stud_id;
                    echo $ans;
                    echo $rst;*/
                    $q=mysqli_query($con,"INSERT INTO choice VALUES(NULL,'$q_id' ,'$stud_id','$ans','$rst')")or die('Error');
                    if($q)
                    {
                        echo "ok";
                        $number++;
                    }
                }
                  
              header("location:welcome2.php?q=result&eid=$eid&number=$number&q_id=$q_id");
            }
            else
            {
             header("location:welcome2.php?q=result&eid='$eid'&number='$number'&q_id='$q_id'");
            }
        }
    }
?>