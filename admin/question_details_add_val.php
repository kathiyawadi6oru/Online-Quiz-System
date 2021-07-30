<?php
	if(isset($_POST['submit']))
	{
        $sub_id = $_POST['sub_id'];
		$quiz_no = $_POST['quiz_no'];
		
		include '../admin/connection.php';
         $qry = "select * from subject_quiz where sub_id='$sub_id' AND quiz_no='$quiz_no';";
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
		
                $qry2 = "INSERT INTO `subject_quiz` VALUES (NULL,'$sub_id','$quiz_no')";
			    $result2 = mysqli_query($con,$qry2);
                if($result2)
                {
                    echo "<script>alert('Subject Quiz Successfully Add.')</script>";
				    echo '<script>window.location="../admin/question_details.php"</script>';
                }
			    else
			    {    
				    echo "<script>alert('something went wrong to add Subject Quiz please check it.')</script>";
				    echo '<script>window.location="../admin/question_details_add.php"</script>';
                }
            }
           
	}
	else
	{
		echo "<script>alert('Something went Wrong.')</script>";
	}
?>