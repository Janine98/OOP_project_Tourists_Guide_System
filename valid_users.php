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

    <title>J.U.M.| Valid Users</title>
    <?php include ("header.php");?>
</head>

    <body>
        <?php include ("navigation_for_home_for_admin.php");?>
        
        <!--PAGE CONTENT-->
        <div id="table_admin_view" class="animated bounceInUp">
        <table class="table">
        <tr>
            <td>Name</td>
            <td>Birthdate</td>
            <td>Address</td>
            <td>Religion</td>
            <td>Country</td>
            <td>Nationality</td>
            <td>Email Address</td>
            <td>Contact Number</td>
            <td>Action</td>
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
                    echo "</td><td>";
                    echo '<a class="btn btn-danger" href="delete.php?id='.$row['id_user'].'">Delete</a>';
                    echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        </div>
        
    </body>
</html>