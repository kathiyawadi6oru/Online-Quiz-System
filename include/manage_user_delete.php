<?php
	
	session_start();
	
	$s = $_SESSION["user"];
	
	if($s)
	{
        if(isset($_POST['del'])){
        include '../admin/connection.php';
        $checkbox = $_POST['check'];
        for($i=0;$i<count($checkbox);$i++){
           $del_id = $checkbox[$i]; 
           mysqli_query($con,"delete from register where u_id='$del_id'");
        }
        echo "<script>alert('user Deleted.')</script>";
        echo "<script>window.location='../admin/manage_user.php'</script>";
    }
    else
    {            
        echo "<script>alert('Something went wrong in deleting user in Faculty Table.')</script>";     
        die('query error:'.mysqli_errno($con).'error is:'.mysqli_errno($con));
        
    }	
        /*$d = $_GET['id'];
        
		include '../admin/connection.php';
        
        $query = "delete from register where u_id ='$d'; ";
        $result = mysqli_query($con,$query);*/
            
        /*if($result)
        {
            echo "<script>alert('user Deleted.')</script>";
            echo "<script>window.location='../admin/manage_user.php'</script>";
            die($result);
        }
        else
        {            
            echo "<script>alert('Something went wrong in deleting user in Faculty Table.')</script>";     
            die('query error:'.mysqli_errno($con).'error is:'.mysqli_errno($con));
            
        }	*/
	}
	else
	{
		header('location:../admin/index.php');
	}

?>