<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        //connect to datebase
        $conn = mysqli_connect($servername, $username, $password);
        //check connect
        if(!$conn){
            die("Nie udane połączenie: " . mysqli_connect_error());
        }
        echo("Połączenie udane");
    ?>
</body>
</html>