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
        $dbname = "mydb";
        //connect to datebase
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        //check connect
        if(!$conn){
            die("Nie udane połączenie: " . mysqli_connect_error());
        }
        //insert to table multi
        $sql ="INSERT INTO myusers(username, firstname, lastname, email) VALUES ('Amanda', 'Zosia', 'Kowalska', 'kowalska@gmail.com');";
        $sql .="INSERT INTO myusers(username, firstname, lastname, email) VALUES ('Patrycja', 'Martyna', 'Leonarska', 'leonarska@gmail.com');";
        $sql .="INSERT INTO myusers(username, firstname, lastname, email) VALUES ('Kuba', 'Patryk', 'Płucienik', 'kubus@gmail.com');";
        $sql .="INSERT INTO myusers(username, firstname, lastname, email) VALUES ('Andrzej', 'Maciej', 'Stefański', 'stefan@gmail.com');";
        if(mysqli_multi_query($conn, $sql)){
            echo("Dodano");
        }
        else{
            echo("Error " . $sql . "<br>" . mysqli_error($conn));
        }
        mysqli_close($conn);
    ?>
</body>
</html>