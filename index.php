<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
      <style>
          *{
              background-image: url(image/book.png);
			  background-repeat: no-repeat;
			  background-size: cover;
          }
      </style>
  </head>
  <body>
      
<Center><h1 style="color:white;" >Online Quiz System</h1></Center>

<form class="box" action="loginval.php" method="POST">
  <h1 style="background: #191919;">Login</h1>
  <input type="text" name="uname" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <input type="submit" name="submit" value="Login">
</form>


  </body>
</html>
