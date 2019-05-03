<?php
    include_once'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">

        <?php
            if(isset($_SESSION['id'])){
                include_once 'admin.php';
            }
        ?>
    </div>
</section>


