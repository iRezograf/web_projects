<?php
require './data/database.php';

$db = new Database();

$sql = "SELECT * FROM view_all_summary WHERE man = 2 OR man = 1";

$skills = $db->query($sql)->fetch();
//$skills = $db->query($sql)->fetchAll();

echo '<pre>';
print_r($skills);
echo '</pre>';
?>

