<?php
    include("head.php");
    include("banner_nav.php");

    $find_sql = "SELECT * FROM `holidays` ";
    $find_query = mysqli_query($dbconnect, $find_sql);

?>

    <div class="main common">

        <h2>All Data</h2>

        <?php

        while($find_rs=mysqli_fetch_assoc($find_query))

        {

            ?>

            <div class="results common">

                <!-- Event name and date -->
                <b>
                    <?php echo $find_rs['Event']; ?>
                    (<?php echo $find_rs['Date']; ?>)
                </b>

                <p>
                    <?php echo $find_rs['Description']; ?>
                </p>


            </div>  <!-- / individual result box -->

            <br>

            <?php

        }   // end of while
        
        ?>


</div>  <!-- / main -->

<?php
include("footer.php");

?>
