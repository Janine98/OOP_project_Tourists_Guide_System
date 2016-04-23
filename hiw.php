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

    <body>
        <?php include ("navigation_for_home.php");?>
        
        <!--CAROUSEL/IMAGE SLIDER-->
    <div id="myCarousel" class="carousel slide animated zoomIn" data-interval="2000" data-ride="carousel">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         </ol>
            <div class="carousel-inner">
                
                <div class="item active">
                    <img src="images/cartitle.png" alt="Cebu" class="img-responsive">    
                </div>
                
                <div class="item">
                    <img src="images/carfind.png" alt="Cebu" class="img-responsive"> 
                </div>
                
                <div class="item">
                    <img src="images/cararrange.png" alt="Cebu" class="img-responsive"> 
                </div>
                
                <div class="item">
                    <img src="images/carexperience.png" alt="Cebu" class="img-responsive"> 
                </div>
                
                
            </div>
        
        <!--
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
-->
       
    </div>
    
    <!--end of Carousel-->
    
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>