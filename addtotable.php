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
        //insert to table
        $sql ="INSERT INTO myusers(username, firstname, lastname, email) VALUES ('Amanda', 'Zosia', 'Kowalska', 'kowalska@gmail.com')";
        if(mysqli_query($conn, $sql)){
            echo("Dodano");
        }
        else{
            echo("Error " . $sql . "<br>" . mysqli_error($conn));
        }
        mysqli_close($conn);
    ?>
</body>
</html>