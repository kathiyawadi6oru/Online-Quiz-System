<?php
  include_once 'database.php';
  session_start();
  $email=$_SESSION['email'];


  if(isset($_SESSION['key']))
  {
    if(@$_GET['q']== 'addquiz' && $_SESSION['key']=='suryapinky') 
    {
      $name = $_POST['name'];
      $name= ucwords(strtolower($name));
      $total = $_POST['total'];
      $sahi = $_POST['right'];
      $wrong = $_POST['wrong'];
      $id=uniqid();
      $q3=mysqli_query($con,"INSERT INTO quiz VALUES  ('$id','$name' , '$sahi' , '$wrong','$total', NOW())");
      header("location:dashboard.php?q=4&step=2&eid=$id&n=$total");
    }
  }

?>



