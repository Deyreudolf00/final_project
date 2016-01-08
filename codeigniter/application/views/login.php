<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
	<link rel="shortcut icon" href="<?php echo base_url()."asset/";?>images/login/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url()."asset/";?>images/login/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."asset/";?>css/bootstrappos.min.css" rel="stylesheet">
	<!--<link href="<?php echo base_url()."asset/";?>css/bootstrap-themepos.min.css" rel="stylesheet">-->
	<link href="<?php echo base_url()."asset/";?>css/loginpos.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
	
  </style>
  <body>
	<div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Login</h1>
      <form class="form" role="form" action="" method="post" name="loginForm" id="loginForm">
      <input type="text" class="form-control" placeholder="Nama User" name="username" id="username" required autofocus/>
      <input type="password" class="form-control" placeholder="Password" value="" name="password" id="password" required />
      <button class="btn btn-primary btn-block" value="SUBMIT" name="submit" id="loginBtn">Login</button>
    </div>
  </div>
</div>
	<script src="<?php echo base_url()."asset/";?>js/jslogin.js"></script>
  </body>
</html>
