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
    }
	
	$title = $_GET['title'];
	$comment = $_GET['ta'];
	
	$qry = "select * from student where stud_code='$name';";
    $result = mysqli_query($con,$qry);
	$row=mysqli_fetch_assoc($result);
	
	$id = $row['stud_id'];
	
	$qry2 = "INSERT INTO `feedback` VALUES (NULL,'$id','$title','$comment')";
		   $result2 = mysqli_query($con,$qry2);
            if($result2)
            {
                echo "<script>alert('Comment Successfully Add.')</script>";
                echo '<script>window.location="welcome.php"</script>';
            }
			else
			{    
			    echo "<script>alert('something went wrong to add student please check it.')</script>";
			    echo '<script>window.location="../admin/welcome5.php"</script>';
            }
?>