<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDO</title>
</head>

<body>
  <?php  
    //defined('BASEPATH') OR exit('No direct script access allowed'); //prevent direct script access
    $host = '127.0.0.1';
    $user = 'root'; //replace with your database username
    $password = ''; //replace with your database password
    $dbname = 'rra_data'; //replace with your database name
    
    
    try{
      $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
  
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo '<pre>'; 
      // print_r('приконнектились'); 
      // echo '</pre>';

      $sql = "SELECT * FROM view_all_summary WHERE man = 2";

      $classmates = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  
      echo '<pre>'; 
      print_r($classmates);
      echo '</pre>';  
    }
    catch(PDOException $e){
        echo 'ошибка подключения к БД: '.$e->getMessage();
    }?>
</body>
</html>
</>