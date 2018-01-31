<html>
<body>

Int 1: <?php echo $_POST["int1"]; ?><br>
Int 2: <?php echo $_POST["int2"]; ?> 
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
    
    $int1 = $_POST["int1"];
    $int2 = $_POST["int2"];
    
    $sql = "INSERT INTO BiomedData (id, data) VALUES ('$int1', '$int2')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

</body>
</html>