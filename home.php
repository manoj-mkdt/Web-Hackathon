<?php
   session_start();
   if(!isset($_SESSION['username'])){
      header('location:login.php'); 
   }
   ?>
<!DOCTYPE html>
<html>
<head>
<title>GITAM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
   <div class="fl_left">
      <ul class="nospace">
        <li><a href="index.html"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><i class="fas fa-phone rgtspace-5"></i> 080-28098000 / 07</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> blrinfo@gitam.edu</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?></li>
        <li><i><a href="login.php" class="fas fa-sign-out-alt">Logout</a></i></li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
      <li><a href="../index.html">Home</a></li>
      <li class="active"><a class="drop" href="#">Academics</a>
        <ul>
          <li><a href="./Visakhapatnam.html">Visakhapatnam</a></li>
          <li><a href="./Hyderabad.html">Hyderabad</a></li>
          <li><a href="./Bangalore.html">Bangalore</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
<br>
<table style="width:50%" align="center">
  <tr>
    <th>Quizes</th>
    <th>Time</th>
    <th>score(10)</th>
  </tr>
  <tr>
    <td>Web</td>
    <td>10-12</td>
    <td>Genral</td>
  </tr>
  <tr>
    <td>Social Media</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
      
</body>
</html>
