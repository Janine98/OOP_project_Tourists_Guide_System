<!--

<?php
session_start();
require_once("class.user.php");
require_once('conn.php');
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('home.admin.php');
}

if(isset($_POST['btn-login']))
{
	$username = strip_tags($_POST['txt_uname']);
	$password = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($username,$password))
	{
		$login->redirect('home.admin.php');
	}
	else
	{
		$error = "Sorry, that account is invalid. Please try again.";
	}	
}
?>

-->


<!DOCTYPE html>
    <head>
        <title>  J.U.M. | ADMIN</title>
            <?php include ("header.php"); ?>
    </head>

    <body background="images/back2.jpg" class="img-responsive" id="indentform">
        <div class="container form">
            
       
        <form class="form-signin" method="post" id="login-form">
             <p class="animated bounceIn">Hello, Admin!</p>
            <i class="caption">Please Log In to continue.</i>
            <hr>
             <div id="error">
				<?php
				if(isset($error))
					{
				?>
					<div class="alert alert-danger">
						<i class="glyphicon glyphicon-remove"></i> &nbsp; <?php echo $error; ?>
					</div>
				<?php
					}
				?>
             </div>

					<!--USERNAME-->
					<div class="form-group">Username:
						<input type="text" class="form-control" id="inputArea" name="txt_uname" placeholder="Username" required />
						<span id="check-e"></span>
					</div>
            
					<!--PASSWORD-->
					<div class="form-group">Password:
						<input type="password" class="form-control" id="inputArea" name="txt_password" placeholder="Password" required />
					</div>
            
						<hr />
            
                    <!--BUTTON-->
					<div class="form-group">
						<button type="submit" name="btn-login" class="btn btn-primary">
							<i class="glyphicon glyphicon-log-in"></i> &nbsp; SIGN IN
						</button>
					</div>  
					
                    <a href="index.php" id="backtohome"><u>Back to Home</u></a></label>
            
				</form>
            </div>
              
</body>
</html>