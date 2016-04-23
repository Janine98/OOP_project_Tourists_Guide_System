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

    <body background="images/back4.jpg">
        <?php include ("navigation_for_home.php");?>
        
        <!--PAGE CONTENT-->
        <div class="container body animated bounceInDown">
        <center>
        <img src="images/banner2.png" class="img-responsive">
        </center>
        </div>
        
        
        <!-------------------TABLE------------------>
        <div class="container body animated bounceInUp">  
        <table class="table">
            <tr>
                <td align="center">
                    <img src="images/d1.jpg" class="img-responsive">
                </td>
                <td align="center">
                    <p class="dest_text"><b>Basilica del Santo Niño</b></p>
                    <p class="dest_text_down">The Minor Basilica of the Holy Child <br>and commonly known as the Santo Niño Basilica, is a minor                            basilica in Cebu City in <br>the Philippines that was founded in the 1565.</p>
                    <a class="btn btn-primary animated infinite flash" href="find_a_guide.php">Book Here!</a>
                </td> 
            </tr>
            
             <tr>
                <td align="center">
                    <img src="images/d2.jpg" class="img-responsive">
                </td>
                <td align="center">
                    <p class="dest_text"><b>Magellan's Cross</b></p>
                    <p class="dest_text_down">Magellan's Cross is a Christian cross planted <br>by Portuguese and Spanish explorers as ordered                              <br>by Ferdinand Magellan upon arriving in Cebu <br>in the Philippines on March 15, 1521.</p>
                    <a class="btn btn-primary animated infinite flash" href="find_a_guide.php">Book Here!</a>
                </td> 
            </tr>
            
            
            <tr>
                <td align="center">
                    <img src="images/d3.jpg" class="img-responsive">
                </td>
                <td align="center">
                    <p class="dest_text"><b>Fort San Pedro</b></p>
                    <p class="dest_text_down">Fuerte de San Pedro is a military defence <br>structure in Cebu, built by the Spanish under the                               command of Miguel López de Legazpi, first <br>governor of the Captaincy General of the <br>Philippines.</p>
                    <a class="btn btn-primary animated infinite flash" href="find_a_guide.php">Book Here!</a>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <img src="images/d4.jpg" class="img-responsive">
                </td>
                <td align="center">
                    <p class="dest_text"><b>Mactan Shrine</b></p>
                    <p class="dest_text_down">The Magellan Shrine is a large memorial tower <br>erected in 1866 in honor of the Portuguese                                  <br>explorer Ferdinand Magellan on the Mactan Island <br>of Cebu, the Philippines.</p>
                    <a class="btn btn-primary animated infinite flash" href="find_a_guide.php">Book Here!</a>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <img src="images/d5.jpg" class="img-responsive">
                </td>
                <td align="center">
                    <p class="dest_text"><b>Taboan Market</b></p>
                    <p class="dest_text_down">You can buy dried fish in other areas in Cebu, <br>but over the years, the Taboan Public Market                               <br>has built its reputation for being the dried <br>fish market in the city. It isn’t crowded or crampy compared to the                               bigger public markets <br>such as Carbon.</p>
                    <a class="btn btn-primary animated infinite flash" href="find_a_guide.php">Book Here!</a>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <img src="images/d6.jpg" class="img-responsive">
                </td>
                <td align="center">
                    <p class="dest_text"><b>Crown Regency <br> (Sky Adventures)</b></p>
                    <p class="dest_text_down">A majestic view of uptown Cebu City satiates <br>the eyes at the 40-storey hotel tower, the <br>Crown                         Regency Hotel and Towers. <br>Comfort and luxury are the main components of each of the facilities and amenities for                                 <br>guests to enjoy during their stay. </p>
                    <a class="btn btn-primary animated infinite flash" href="find_a_guide.php">Book Here!</a>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <img src="images/d7.jpg" class="img-responsive">
                </td>
                <td align="center">
                    <p class="dest_text"><b>Cebu Provincial Capitol</b></p>
                    <p class="dest_text_down">The Cebu Provincial Capitol is the seat of the provincial government of Cebu in the Philippines.</p>
                    <a class="btn btn-primary animated infinite flash" href="find_a_guide.php">Book Here!</a>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <img src="images/d8.jpg" class="img-responsive">
                </td>
                <td align="center">
                    <p class="dest_text"><b>Heritage of Cebu Monument</b></p>
                    <p class="dest_text_down">The Heritage of Cebu Monument is a tableau <br>of sculptures made of concrete, bronze, brass <br>and                          steel showing scenes about events <br>and structures related to the history of Cebu.</p>
                    <a class="btn btn-primary animated infinite flash" href="find_a_guide.php">Book Here!</a>
                </td> 
            </tr>
            
            
        </table>
        </div>
        
       
</body>
</html>