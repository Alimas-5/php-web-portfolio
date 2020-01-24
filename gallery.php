
<?php
$id=isset($_GET['id'])?$_GET['id']:0; 
require('includes/functions.php');
$img_selects = find_Paged(6, 0);
?>

<!doctype html>
<html lang="fr">
<?php
require ('includes/head.php');
?>
<body id="gallery">
<?php
require ('includes/header.php');
?>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">
                
                <?php foreach ( $img_selects as $img_select) {

                ?>
                <a href="detail.php" title="">
                    
                    
                    <img src="images/medium/<?php echo $img_select['slug'] ?> " alt="Picture 1">
                    <br><?php echo $img_select ['title'];?>
                </a>
                <?php } ?>
            </div>
            <p id="pager">
                <a href="javascript:void(0)" class="btn disabled">
                    Previous page
                </a>
                <a href="gallery.php" class="btn">
                    Next page
                </a>
            </p>
        </div>
    </main>
    <?php
require ('includes/footer.php');
?>
    
</body>
</html>
