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

            echo $find_rs['Event'];

        }   // end of while
        
        ?>


</div>  <!-- / main -->

<?php
include("footer.php");

?>
