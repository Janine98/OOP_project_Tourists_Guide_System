<?php
session_start();
require_once("class.user.php");
require_once('conn.php');
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$username = strip_tags($_POST['txt_uname']);
	$password = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($username,$password))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Log In</title>

<body>

                    <form class="form-signin" method="post" id="login-form">
                      
        
					<div id="error">
				<?php
				if(isset($error))
					{
				?>
					<div class="alert alert-danger">
						<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
					</div>
				<?php
					}
				?>
					</div>

					<!-- ****USERNAME FIELD -->
					<div class="form-group">
						<input type="text" class="form-control" name="txt_uname" placeholder="Username" required />
						<span id="check-e"></span>
					</div>
					<!-- ****PASSWORD FIELD -->
					<div class="form-group">
						<input type="password" class="form-control" name="txt_password" placeholder="Your Password" />
					</div>
						<hr />
					<div class="form-group">
						<button type="submit" name="btn-login" class="btn btn-default">
							<i class="glyphicon glyphicon-log-in"></i> &nbsp; SIGN IN
						</button>
					</div>  
					<br />
					<label>Don't have account yet ? <a href="sign-up.php">Sign Up</a></label>
				</form>
              
</body>
</html>