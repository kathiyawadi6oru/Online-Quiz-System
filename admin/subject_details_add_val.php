<?php
	if(isset($_POST['submit']))
	{
        $sem_id = $_POST['sem_id'];
        $sub_code = $_POST['sub_code'];
        $sub_name = $_POST['sub_name'];
		
		include '../admin/connection.php';
		
        $qry = "select sem_code from semester where sem_id='$sem_id';";
        $result = mysqli_query($con,$qry);
        $row = mysqli_num_rows($result);
        
        if($row>0)
        {
            $num = mysqli_fetch_assoc($result);
            $sub_code = strtoupper($sub_code);
            if(substr($sub_code,0,3)!=$num['sem_code'])
            {
                    echo "<script>alert('Subject code and semester code is not matched.')</script>";
				    echo '<script>window.location="../admin/subject_details_add.php"</script>';   
            }
            else
            {
                
                    $qry = "select * from subject where sub_code='$sub_code';";
                    $result = mysqli_query($con,$qry);
                    $row = mysqli_num_rows($result);

                    if($row>0)
                    {
                        //echo "duplicate";
                        echo "<script>alert('Subject code Already Add.')</script>";
                        echo '<script>window.location="../admin/subject_details_add.php"</script>';
                    }
                    else
                    {

                        $qry2 = "INSERT INTO `subject` VALUES (NULL,'$sem_id','$sub_code','$sub_name')";
                        $result2 = mysqli_query($con,$qry2);
                        if($result2)
                        {
                            echo "<script>alert('Subject Successfully Add.')</script>";
                            echo '<script>window.location="../admin/subject_details.php"</script>';
                        }
                        else
                        {    
                            echo "<script>alert('something went wrong to add Subject please check it.')</script>";
                            echo '<script>window.location="../admin/subject_details_add.php"</script>';
                        }
                    }
            }
        }
        else
        {
            echo "<script>alert('Course id is not Already Add in Semester Details.')</script>";
            echo '<script>window.location="../admin/subject_details_add.php"</script>';
        }
			
	}
	else
	{
		echo "<script>alert('Something went Wrong.')</script>";
	}
?>