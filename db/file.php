<!-- <html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>FTP Server List</title>
</head>  -->

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

    $sql_1 = "SELECT * FROM `db_test_1` WHERE id = '" . $id . "' ";
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
    $id++;
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