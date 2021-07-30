<?php
	if(isset($_POST['submit']))
	{
        $q_id = $_GET['id'];
		$question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $true_option = $_POST['true_option'];
		
		include '../admin/connection.php';
         $qry = "select * from question where question='$question' AND q_id!='$q_id';";
            $result = mysqli_query($con,$qry);
            $row = mysqli_num_rows($result);
            if($row>0)
            {
                //echo "duplicate";
                echo "<script>alert('Question Already Add.')</script>";
                echo '<script>window.location="../admin/question_details.php"</script>';
            }
            else
            {
		
                $qry2 = "UPDATE `question` SET `question`='$question',`option1`='$option1',`option2`='$option2',`option3`='$option3',`option4`='$option4',`true_option`='$true_option' WHERE q_id='$q_id' ;";
			    $result2 = mysqli_query($con,$qry2);
                if($result2)
                {
                    echo "<script>alert('Question Successfully Update.')</script>";
				    echo '<script>window.location="../admin/question_details.php"</script>';
                }
			    else
			    {    
				    echo "<script>alert('something went wrong to update Question please check it.')</script>";
				    echo '<script>window.location="../admin/question_details.php"</script>';
                }
            }
           
	}
	else
	{
		echo "<script>alert('Something went Wrong.')</script>";
	}
?>