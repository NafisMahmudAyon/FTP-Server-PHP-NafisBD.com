<?php
include ("conn.php");
include ("id.php");
include ("row.php");
$id = 1;
// $max = mysqli_num_rows( $result );
while ($id <= $max) {
    $sql = "SELECT * FROM `db_test` WHERE id = '" . $id . "' ";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
                            
    echo "Name: ".$row["name"]."<br>";
    ?>
    <div>
        <?php echo $row["name"]."<br>"; ?>
    </div>
    <?php
    $id++;
}


?>