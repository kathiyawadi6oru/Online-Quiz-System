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
            <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>> <a href="welcome14.php?q=1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
			<li <?php if(@$_GET['q']==4) echo'class="active"'; ?>> <a href="welcome.php?q=4"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Feedback</a></li>
            
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
            </div><?php
                        $eid=@$_GET['eid'];
                        $q=mysqli_query($con,"SELECT choice.result FROM choice INNER JOIN question ON question.q_id=choice.q_id where question.sub_quiz_id='$eid';")or die('Error157');
                        echo  '<div class="panel">
                        <center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';
                        $num =0;
                        $right = 0;
                        $wrong = 0;
                        while($row=mysqli_fetch_array($q) )
                        {
                            $num++;
                            $s=$row['result'];
                            if($s == "true"){
                                $right++;
                            }
                            else{
                                $wrong++;
                            }
                            
                           
                        }
                         echo '<tr style="color:#66CCFF">
                                    <td>Total Questions</td>
                                    <td>'.$num.'</td>
                                </tr>
                                <tr style="color:#99cc32">
                                    <td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>
                                    <td>'.$right.'</td>
                                </tr> 
                                <tr style="color:red">
                                    <td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td>
                                    <td>'.$wrong.'</td>
                                </tr>';
                ?>
        </div>
    </div>
</body>
</html>