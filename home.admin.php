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

    <body background="images/back5.jpg">
        <?php include ("navigation_for_home_for_admin.php");?>
     <!--PAGE CONTENT-->
        <div class="container body animated bounceInDown">
        <img src="images/27.png" class="img-responsive">
        </div>
        
        

        
       
        
                
            
            



    

</body>
</html>