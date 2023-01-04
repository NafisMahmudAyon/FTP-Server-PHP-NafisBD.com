<?php
    include ("conn.php");

    $sql = "SELECT * FROM db_test";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
            echo "Name: ".$row["name"]."<br>";
        }
    } else {
        echo "0 results";
    }
    
    ?>