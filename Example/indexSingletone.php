<?php

//require './data/database_example.php';
require './data/databaseSingletone.php';
// require './data/data.php';

// examples

$stmt = Database :: prepare ( "SELECT * FROM view_all_summary WHERE man = 2" ) ;
$stmt -> execute ( ) ;
$skills = $stmt -> fetchAll ( );
echo '<pre>';
print_r($skills);
echo '</pre>';
$stmt -> closeCursor ( ) ;
?>
