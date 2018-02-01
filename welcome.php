<html>
<body>

ID: <?php echo $_POST["hrid"]; ?><br>
Received HR Data: <?php echo $_POST["heartRate"]; ?> 
<?php

    $servername = "localhost";
    $username = "id4492807_cpen391";
    $password = "cpen391group12";
    $database = "id4492807_cpen391group12";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
    $hrid = $_POST["hrid"];
    $heartRate = $_POST["heartRate"];
    
    $sql = "INSERT INTO BiomedData (id, data) VALUES ('$hrid', '$heartRate')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

</body>
</html>