<?php

	require_once("session.php");
	
	require_once("class.user.php");
	$auth_user = new USER();
	
	
	$id_user = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE id_user=:id_user");
	$stmt->execute(array(":id_user"=>$id_user));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<html>
<head>

    <title>J.U.M.| Rent a Guide!</title>
    <?php include ("header.php");?>
</head>

    <body background="images/back.jpg">
        <?php include ("navigation_for_home.php");?>
     <!--PAGE CONTENT-->
        <div class="container body animated bounceInDown">
        <p class="animated infinite flash"> SUCCESS!</p>
        </div>
        
        <div class="container body animated bounceInUp">
        <p class="text">Your chosen Tour Guide will get in contact with you within 3 days. <br>You can ask furthur questions with your Tour Guide.<br> Hope you have a wonderful trip in Cebu City, the Queen city of the South. <br>Thank you for choosing <i><b>J.U.M.| Rent a Guide!</i></b><br> Hope to hear from you soon!</p>
            <center>
            <p><img src="images/icon.png" class="img-responsive animated infinite jello"></p>
                </center>
        </div>

        
       
        
                
            
            



    

</body>
</html>