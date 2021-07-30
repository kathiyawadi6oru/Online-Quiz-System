<?php
	session_start();
	$u = $_POST['email'];
	$p = $_POST['password'];
	
	if(isset($_POST['submit']))
	{
		
        require('database.php');
        
		//$str = "SELECT * FROM user WHERE email='$email' and password='$pass'";
        $qry = "select * from user where email='$u';";
		$result = mysqli_query($con,$qry);
		$num = mysqli_num_rows($result);
	
		if($num != 0)
		{
              $qry1 = "select * from user where email='$u' && password='$p';";
		      $result1 = mysqli_query($con,$qry1);
		      $num1 = mysqli_num_rows($result1);
            
              if($num1)
		      {
				   $_SESSION['logged']=$u;
					$row=mysqli_fetch_array($result1);
					$_SESSION['name']=$row[1];
					$_SESSION['id']=$row[0];
					$_SESSION['email']=$row[2];
					$_SESSION['password']=$row[3];
					header('location: welcome.php?q=1'); 
            
                   //if($data['f_type'] == "Admin")
                   //{
                        echo '<script>alert("Welcome To DCS  Internal Examination System Admin user.")</script>';
			            echo '<script>window.location="admin/main.php"</script>';
                        //header("location:../admin/main.php");
                    /*}
                    elseif($data['f_type'] == "Faculty")
                    {
                        echo '<script>alert("Welcome To DCS  Internal Examination System Fculty User.")</script>';
                         echo '<script>window.location="user/index.php"</script>';
                    }
                    else
                    {
                        die('query error:'.mysqli_errno($con).'error is:'.mysqli_errno($con));
                    }*/
		      }
		      else
		      {
			        echo '<script>alert("Invalid Password.")</script>';
                    echo '<script>window.location="login.php"</script>';
                    //header("location:../admin/index.php");
		      }
        }
        else
        {
            echo '<script>alert("Invalid Username.")</script>';
            //echo '<script>window.location="login.php"</script>';
            //header("location:../admin/index.php");
        }
	}
	else
	{
		echo "problem";
        echo '<script>window.location="login.php"</script>';
        //header("location:../admin/index.php");
	}
?>