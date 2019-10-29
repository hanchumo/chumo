<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>  
</nav>


</nav>


</div>
<a href="#">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
<img src="images/QET.png">
<ul class success ="nav navbar-nav">

<div>

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
<form action="includes/login.inc.php" method="post">
<input type="text" name="mailuid" placeholder="username/email">
<input type="password" name="pwd" placeholder="password">
<button class ="btn btn-primary" type="submit" name="login-submit">Login</button>
</form>
<a href="signup.php">Signup</a><br>
<form action="includes/logout.inc.php" method="post">
<button class ="btn btn-primary" type="submit" name="logout-submit">Logout</button>
</form>
</div>


   </header> 
</body>
</html>