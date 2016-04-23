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

<title>Hello, <?php print($userRow['username']); ?></title>
</head>

<body>

        
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['username']; ?>&nbsp;<span class="caret"></span></a>
           
                
                <a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>
            
            



    

</body>
</html>