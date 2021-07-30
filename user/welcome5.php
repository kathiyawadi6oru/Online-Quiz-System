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
					 <form action="insertfb.php" method="get">
					 <?php
						 echo '<h1>feedback</h1>';
						 echo  '<div class="panel title"><div class="table-responsive">
                        <table class="table table-striped title1" >
                        <tr style="color:red">
							<td><center><b>Title</b></center></td>
							<td><center><b>Comment</b></center></td>
						</tr>
						<tr style="color:red">
						<td><center><b><input type="text" name="title"> </center></td>
						<td><center><b><textarea name="ta"></textarea></b></center></td>
						</tr>';
                        $c=0; 
                        echo '</table></div></div>';
						echo '<div class="form-group text-right">
									<button class="btn btn-primary btn-block" type="submit" name="submit value="std">Submit</button>
								</div>';
								
					 				 
                ?>
				</form>
</body>
</html>