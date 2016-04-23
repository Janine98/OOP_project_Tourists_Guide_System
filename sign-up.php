<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-signup']))
{
	$username = strip_tags($_POST['txt_uname']);
	$password = strip_tags($_POST['txt_upass']);
    $name = strip_tags($_POST['name']);
    $birthdate = strip_tags($_POST['birthdate']);
    $address = strip_tags($_POST['address']);
    $religion = strip_tags($_POST['religion']);
    $country = strip_tags($_POST['country']);
    $nationality = strip_tags($_POST['nationality']);
    $email_address = strip_tags($_POST['email_address']);
    $contact_no = strip_tags($_POST['contact_no']);

	
    if($username=="" && $password=="" && $name=="" && $birthdate=="" && $address=="" && $religion=="" && $country=="" && $nationality=="" && $email_address=="" && $contact_no==""){
            $error[] = "Please fill in the boxes for the needed information!";
    }
	else if($username=="")	{
		$error[] = "Username Required!";	
	}
	else if($password=="")	{
		$error[] = "Password Required!";
	}
	else if(strlen($password) < 6){
		$error[] = "Password must be atleast 6 characters!";	
	}
    else if($name==""){
		$error[] = "Full Name Required!";	
    }
    else if($birthdate==""){
		$error[] = "Please don't leave Birthdate empty!";	
    }
    else if($address==""){
		$error[] = "Please don't leave Address empty!";	
    }
    else if($religion==""){
		$error[] = "Please don't leave Religion empty!";	
    }
    else if($country==""){
		$error[] = "Please don't leave Country empty!";	
    }
    else if($nationality==""){
		$error[] = "Please don't leave Nationality empty!";	
    }
    else if($email_address==""){
		$error[] = "Please don't leave Email Address empty!";	
    }
    else if($contact_no=="")	{
		$error[] = "Please don't leave Contact Number empty!";	
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT username, contact_no FROM users WHERE username=:username OR contact_no=:contact_no");
			$stmt->execute(array(':username'=>$username, ':contact_no'=>$contact_no));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['username']==$username) {
				$error[] = "sorry username already taken !";
			}
			else if($row['contact_no']==$contact_no) {
				$error[] = "sorry contact number id already taken !";
			}
			else
			{
				if($user->register($username,$password,$name,$birthdate,$address,$religion,$country,$nationality,$email_address,$contact_no)){	
					$user->redirect('sign-up.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>



<!DOCTYPE html>
<head>
<title>  J.U.M. | Sign-In</title>
        <?php include ("header.php"); ?>

</head>
<body background="images/back7.jpg" id="indentform">

    <div class="signin-form">

        <div class="container">
    	
            <form method="post" class="form-signin">
                <p class="animated bounceIn">Hello, Guest!</p>
                <i class="caption">Please Sign up to continue.</i>
                <hr />
                    <?php
			             if(isset($error))
			                 {
			 	               foreach($error as $error)
			 	                   {
				    ?>
                
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                    
                    <?php
				        }
			         }
			         else if(isset($_GET['joined']))
			             {
				    ?>
                 
                    <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='log-in.php' id="link">Log in</a> here
                    </div>
                    <?php
			         }
			         ?>
            
                <!-- ****USERNAME FIELD -->
                    <div class="form-group">Username:
                        <input type="text" class="form-control" id="username" name="txt_uname" placeholder="Your desired Username." value="<?php if(isset($error)){echo $username;}?>" />
                    </div>
            
                <!-- ****PASSWORD FIELD -->
                    <div class="form-group">Password:
            	       <input type="password" class="form-control" name="txt_upass" placeholder="Passwords must be atleast 6 characters." />
                    </div>
                
                <!-- ****NAME FIELD -->
                    <div class="form-group">Full Name:
            	       <input type="text" class="form-control" name="name" placeholder="Family name, First name, Middle Initial" />
                    </div>
                
                <!-- ****BIRTHDAY FIELD -->
                    <div class="form-group">Date of Birth:
            	       <input type="date" class="form-control" name="birthdate">
                    </div>
            
                <!-- ****ADDRESS FIELD -->
                    <div class="form-group">Address:
            	       <input type="text" class="form-control" name="address" placeholder="What's your Full Address?" />
                    </div>
                
                <!-- ****RELIGION FIELD -->
                    <div class="form-group">Religion:
            	       <input type="text" class="form-control" name="religion" placeholder="What's your Religion?" />
                    </div>
                
                <!-- ****COUNTRY FIELD -->
                    <div class="form-group">Country:
            	       <input type="text" class="form-control" name="country" placeholder="What Country are you from?" />
                    </div>
                
                <!-- ****NATIONALITY FIELD -->
                    <div class="form-group">Nationality:
            	       <input type="text" class="form-control" name="nationality" placeholder="What's your Nationality?" />
                    </div>
                
                 <!-- ****EMAIL ADDRESS FIELD -->
                    <div class="form-group">E-mail Address:
            	       <input type="text" class="form-control" name="email_address" placeholder="Enter a Valid Email Address." />
                    </div>
                
                 <!-- ****CONTACT NUMBER FIELD -->Contact Nmber:
                    <div class="form-group">
            	       <input type="number" class="form-control" name="contact_no" placeholder="Contact Number to reach you." />
                    </div>
            
                <div class="clearfix"></div><hr />
                    <div class="form-group">
            	       <button type="submit" class="btn btn-primary" name="btn-signup">
                	       <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                        </button>
                    </div>
                    
                <br />
            
                    <label>Have an account already? <a href="log-in.php" id="sign-in">Sign In.</a></label>
                <br>
                    <a href="index.php" id="backtohome"><u>Back to Home</u></a></label>
        </form>
        </div>
    </div>

    </body>
</html>