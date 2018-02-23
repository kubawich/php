<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
      <?php
      $servername = "localhost";
      $username = "username";
      $password = "password";
      $database = "grabowski";
      
      try {
          $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully"; 
          }
      catch(PDOException $e)
          {
          echo "Connection failed: " . $e->getMessage();
          }
      ?> 
    ?>

</body>
</html>