<?php
	if(isset($_POST['submit']))
	{
        $sub_id = $_POST['sub_id'];
        $f_id = $_POST['f_id'];
      

        include '../admin/connection.php';
            
           
                   
                    $qry = "select * from faculty_permission where sub_id='$sub_id' AND f_id='$f_id';";
                    $result = mysqli_query($con,$qry);
                    $row = mysqli_num_rows($result);
                    if($row>0)
                    {
                        //echo "duplicate";
                        echo "<script>alert('Already Assign in this Faculty)</script>";
                        echo '<script>window.location="../admin/faculty_permission_add.php"</script>';
                    }
                    else
                    {
                        $qry2 = "INSERT INTO `faculty_permission` VALUES (NULL,'$f_id','$sub_id')";
			            $result2 = mysqli_query($con,$qry2);
                        if($result2)
                        {
                            echo "<script>alert('Successfully Add.')</script>";
				            echo '<script>window.location="../admin/faculty_permission.php"</script>';
                        }
			            else
			            {    
                            echo "<script>alert('something went wrong to add faculty permission please check it.')</script>";
				            echo '<script>window.location="../admin/faculty_permission_add.php"</script>';
                        }
                    }      
    
       
        
        
    }
	else
	{
		echo "<script>alert('Something went Wrong.')</script>";
	}
?>