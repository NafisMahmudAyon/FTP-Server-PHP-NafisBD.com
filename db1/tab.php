<?php
include ("conn.php");
include ("file.php");
$id = 1;
$x = 1;
    while($x <= 2) {
    echo $hello;
    ?>
    
        <div class="website">
            <div class="title">
                <div class="head">
                    <?php 
                        $sql = "SELECT * FROM db_test";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        
                        echo "Name: ".$row["name"]."<br>"; 
                    ?>
                </div>
            </div>
            <iframe src="<?php echo $row["link"]; ?>" scrolling="no" frameborder="0" width="100%" height="500px"></iframe>
        </div>
<?php
$x++;
      }