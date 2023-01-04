<?php

include("conn.php");

// $sql = "SELECT * FROM `db_test` WHERE id = '" . $id . "' ";
$sql = "SELECT * FROM db_test";
if ($result = mysqli_query($conn, $sql)) {
  
    // Return the number of rows in result set
    $max = mysqli_num_rows( $result );
      
    // Display result
    // printf("Total rows in this table : %d\n", $max);
}