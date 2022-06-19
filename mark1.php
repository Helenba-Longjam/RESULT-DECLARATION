<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dname = "studentdb";

    $conn = new mysqli($servername, $username, $password,$dname);
    if($conn->connect_error){
        die("Connection Error:".$conn->connect_error);
    }
    $sql = "SELECT roll, fname from student where roll =".$_POST["roll"];
    
    $result = $conn->query($sql);

    if($result->num_rows > 0)
        while($row = $result->fetch_assoc()){
            echo "Roll: ".$row["roll"]." ".$row["fname"]."<br>";
        }
    ?>
</body>
</html>