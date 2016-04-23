<?php
require_once('pdolib.php');

$dbc = new Pdolib();

$table1 = 'users';
$query1 = 'CREATE TABLE IF NOT EXISTS users (
	id_user Integer NOT NULL UNIQUE AUTO_INCREMENT,
	username Varchar(40) NOT NULL,
	password Varchar(255) NOT NULL,
	address Varchar(40) NOT NULL,
	contact_no Integer NOT NULL,
Primary Key (id_user)
) ENGINE = InnoDB AUTO_INCREMENT=1 ; ';

if(!$dbc->tableExists($table1) ){
    $dbc->createTable($table1,$query1);
}
?>