<?php
session_start();
$error = $_SESSION['ErrorLogin'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard ADMIN</title>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.css">

</head>
<body>
	<?php if($error){?>
<div class="alert alert-warning alert-danger" role="alert">
  <strong>Error!</strong> <?=$error?> .
</div>
<? } ?>
<div class="container">
<form action="valida.php" class="form-horizontal" method="POST" >
<fieldset>

<!-- Form Name -->
<legend>Admin Login</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailid">Email </label>  
  <div class="col-md-4">
  <input id="emailid" name="emailid" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" placeholder="" class="form-control input-md" required="" type="password">
    <span class="help-block"> </span>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-4">
    <button id="login" name="login" value="Login" class="btn btn-primary">Login</button>
  </div>
</div>

</fieldset>
</form>
</div>
</body>
</html>
<?php 
unset($_SESSION['ErrorLogin']);
?>