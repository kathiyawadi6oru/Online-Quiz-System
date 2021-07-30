<?php
	
	session_start();
	
	$s = $_SESSION["user"];
	
	if($s)
	{
        $d = $_GET['id'];
        
		include '../admin/connection.php';
        
        $query = "delete from question where u_id ='$d'; ";
        $result = mysqli_query($con,$query);
            
        if($result)
        {
            echo "<script>alert('quiz Deleted.')</script>";
            echo "<script>window.location='../admin/question_details.php'</script>";
        }
        else
        {            
            echo "<script>alert('Something went wrong in deleting user in Faculty Table.')</script>";     
            die('query error:'.mysqli_errno($con).'error is:'.mysqli_errno($con));
        }	
	}
	else
	{
		header('location:../admin/index.php');
	}

?>
