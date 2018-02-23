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
        //view date 
        $sql = "SELECT id, firstname, lastname FROM myusers";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo("id: " . $row["id"]. " name: " . $row["firstname"]. " " . $row["lastname"]. "<br>");
            }}
            else{
                echo("Nie ma nic");
            }
        mysqli_close($conn);
    ?>
</body>
</html>