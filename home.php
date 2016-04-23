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
        <?php include ("navigation_for_home.php");?>
     <!--PAGE CONTENT-->
        <div class="container body animated bounceInDown">
        <img src="images/27.png" class="img-responsive">
        </div>
        
        <div class="container body animated bounceInUp">
        <p class="text">Welcome, guest!<br> Here, you can find your destinations around Cebu City, Philippines and you can even pick a local guide to help you discover the wonders of this place! Have you ever imagined that your travel could be filled with unexpected scenes, encounters and experiences, like in the movies? Are you fed up with carefully coordinated guided tours? Are you just following guide books? <i>Rent a Guide!</i> aims to help travelers have superior rather than ordinary travel experiences. </p>
        </div>

        
       
        
                
            
            



    

</body>
</html>