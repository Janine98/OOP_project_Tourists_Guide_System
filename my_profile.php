<?php
    /*Code for the name at Hello, (name)*/
    require_once("session.php");
	require_once("class.user.php");
	$auth_user = new USER();
	$id_user = $_SESSION['user_session'];
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE id_user=:id_user");
	$stmt->execute(array(":id_user"=>$id_user));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);


    /*Code to Retrieve details from Database*/ 
    $db = new PDO( 'mysql:host=localhost;dbname=dbtourist', "root", "" );
    $sql = "SELECT * FROM users";
    $query = $db->prepare( $sql );
    $query->execute();
    $results = $query->fetchAll( PDO::FETCH_ASSOC );

?>



<html>
<head>

    <title>J.U.M.| Rent a Guide!</title>
    <?php include ("header.php");?>
</head>

    <body>
        <?php include ("navigation_for_home.php");?>
        
        <!--PAGE CONTENT-->
        <div class="container">
        <table class="table">
        <tr>
            <th>Name</th>
            <th>Birthdate</th>
            <th>Address</th>
            <th>Religion</th>
            <th>Country</th>
            <th>Nationality</th>
            <th>Email Address</th>
            <th>Contact Number</th>
        </tr>
        
            <?php foreach( $results as $row ){
                echo "<tr><td>";
                    echo $row['name'];
                    echo "</td><td>";
                    echo $row['birthdate'];
                    echo "</td><td>";
                    echo $row['address'];
                    echo "</td><td>";
                    echo $row['religion'];
                    echo "</td><td>";
                    echo $row['country'];
                    echo "</td><td>";
                    echo $row['nationality'];
                    echo "</td><td>";
                    echo $row['email_address'];
                    echo "</td><td>";
                    echo $row['contact_no'];
                    echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        </div>
        
    </body>
</html>