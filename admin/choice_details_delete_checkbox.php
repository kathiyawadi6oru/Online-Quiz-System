<?php
	
	session_start();
	
	$s = $_SESSION["user"];
	
	if($s)
	{
        include '../admin/connection.php';
        if(isset($_POST['del']))
        {
            $checkbox = $_POST['check'];
            
            for($i=0;$i<count($checkbox);$i++)
            {
                $del_id = $checkbox[$i]; 
                mysqli_query($con,"delete from course where choice_id='$del_id'");
            }
            echo "<script>alert('Choice details Deleted.')</script>";
            echo "<script>window.location='../admin/choice_details.php'</script>";
        }
	}
	else
	{
		header('location:../admin/index.php');
	}

?>