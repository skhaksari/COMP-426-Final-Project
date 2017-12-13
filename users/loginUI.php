<?php include('registerlogin.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

<!-- create post form to recieve username and password
from user then sends to registerlogin.php for backend manipulation.
provides a link to register, if not a member . -->

  <form method="post" action="loginUI.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="user" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="pass">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="registerUI.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
