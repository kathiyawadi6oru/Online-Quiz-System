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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | Online Quiz System</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="#"><b>Online Quiz System</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="welcome.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Quiz<span class="sr-only">(current)</span></a></li>
            <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>> <a href="welcome14.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
			<li <?php if(@$_GET['q']==4) echo'class="active"'; ?>> <a href="welcome5.php?q=4"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Feedback</a></li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li <?php echo''; ?> > <a href="logout.php?q=welcome.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log Out</a></li>
        </ul>
        
            
           
       
        </div>
    </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                

                <?php
                    
                        $eid=@$_GET['eid'];
                        $sn=@$_GET['n'];
                        $total=@$_GET['t'];
                        if(isset($_GET['q_id'])){
                            $idd = $_GET['q_id'];
                            $q=mysqli_query($con,"SELECT * FROM question WHERE sub_quiz_id='$eid' AND q_id>'$idd' order by q_id " );
                            $number = $_GET['number'];
                        }
                        else
                        {
                            $q=mysqli_query($con,"SELECT * FROM question WHERE sub_quiz_id='$eid' order by q_id " ); 
                            $number=1;
                        }
                        echo '<div class="panel" style="margin:5%">';
						$rnum = mysqli_num_rows($q);
                        if($rnum == 0)
                        {
                          header("location:welcome12.php?q=result&eid=$eid");   
                        }
                        
                        while($row=mysqli_fetch_array($q) )
                        {
                            $q_id=$row['q_id'];
                            $sub_quiz_id=$row['sub_quiz_id'];
							$question = $row['question'];
							$option1 = $row['option1'];
							$option2 = $row['option2'];
							$option3 = $row['option3'];
							$option4 = $row['option4'];
								
                            echo '<b>Question &nbsp;'.$number.'&nbsp;::<br /><br />'.$question.'</b><br /><br />';
							 echo '<form action="choice_insert.php?eid='.$sub_quiz_id.'&qid='.$q_id.'&number='.$number.'" method="POST"  class="form-horizontal">
                        <br />';
							echo'<input type="radio" name="ans" value="1" required>&nbsp;'.$option1.'<br /><br />';
							echo'<input type="radio" name="ans" value="2" required>&nbsp;'.$option2.'<br /><br />';
							echo'<input type="radio" name="ans" value="3" required>&nbsp;'.$option3.'<br /><br />';
							echo'<input type="radio" name="ans" value="4" required>&nbsp;'.$option4.'<br /><br />';
                            break;
                        
                        }
                        echo'<br /><button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
                   

                ?>
            </div>
        </div>
    </div>
</body>
</html>