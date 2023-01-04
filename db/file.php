<?php
include ("head.php");
include ("conn.php");
include ("id.php");
include ("row.php");
$id = 1;
// $max = mysqli_num_rows( $result );
while ($id <= $max) {
    $sql = "SELECT * FROM `db_test` WHERE id = '" . $id . "' ";
    $result = mysqli_query($conn, $sql);

    $sql_1 = "SELECT * FROM `db_test` WHERE id = '" . ($id+1) . "' ";
    $result_1 = mysqli_query($conn, $sql_1);

    $row = mysqli_fetch_assoc($result);

    $row_1 = mysqli_fetch_assoc($result_1);
                            
    // $row_2 = mysqli_fetch_assoc($result);
    // echo $row_2; 
    
    ?>
    <div class="tab-content">
        <!-- Home start  -->
        <div id="home" class="container tab-pane active">
            <div class="grid-container mt-3">
                <div class="website">
                    <div class="title">
                        <div class="head">
                            <?php echo $row["name"];?>
                        </div>
                    </div>
                    <iframe src="<?php echo $row["link"]; ?>" scrolling="no" frameborder="0" width="100%" height="500px"></iframe>
                </div>
                <div class="website">
                    <div class="title">
                        <div class="head">
                            <?php echo $row_1["name"];?>
                        </div>
                    </div>
                    <iframe src="<?php echo $row_1["link"]; ?>" scrolling="no" frameborder="0" width="100%" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php
    $id+=2;
}


?>

        <!-- <div class="tab-content"> -->
            <!-- Home start  -->
            <!-- <div id="home" class="container tab-pane active">
                <div class="grid-container mt-3">
        
                    <div class="website">
                        <div class="title">
                            <div class="head">
                                Hello!
                            </div>
                        </div>
                        <iframe src="https://nafisbd.com" scrolling="no" frameborder="0" width="100%" height="500px"></iframe>
                    </div>
                </div>
            </div>
        </div> -->


<!-- </html> -->