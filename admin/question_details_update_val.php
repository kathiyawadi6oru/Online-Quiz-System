<?php
	if(isset($_POST['submit']))
	{
        $id = $_GET['id'];
        $sub_id = $_POST['sub_id'];
		$quiz_no = $_POST['quiz_no'];
		
		include '../admin/connection.php';
         $qry = "select * from subject_quiz where sub_id='$sub_id' AND quiz_no='$quiz_no' AND sub_quiz_id!='$id';";
            $result = mysqli_query($con,$qry);
            $row = mysqli_num_rows($result);
            if($row>0)
            {
                //echo "duplicate";
                echo "<script>alert('Subject Quiz Already Add.')</script>";
                echo '<script>window.location="../admin/question_details_add.php"</script>';
            }
            else
            {
		
                $qry2 = "UPDATE `subject_quiz` SET `sub_id`='$sub_id',`quiz_no`='$quiz_no' where sub_quiz_id='$id'";
			    $result2 = mysqli_query($con,$qry2);
                if($result2)
                {
                    echo "<script>alert('Subject Quiz Successfully Update.')</script>";
				    echo '<script>window.location="../admin/question_details.php"</script>';
                }
			    else
			    {    
				    echo "<script>alert('something went wrong to update Subject Quiz please check it.')</script>";
				    echo '<script>window.location="../admin/question_details_add.php"</script>';
                }
            }
           
	}
	else
	{
		echo "<script>alert('Something went Wrong.')</script>";
	}
?>