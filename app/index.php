<?php
require_once 'views/header.php';
?>

<?php
require_once 'views/hero.php';
?>

<div id="content">
    <div class="featured_wrapper">
        <div class="limit">
            <span class="exclaim_half">
                Some of our recent placements...
            </span>
        </div>
    </div>

    <div class="limit" style="margin: 20px auto;">
        <?php include('portfolio/thewalkingdead.php'); ?> 
        <?php include('portfolio/extant.php'); ?> 
        <?php include('portfolio/adidas2.php'); ?> 
        <?php include('portfolio/freeview.php'); ?> 
        <?php include('portfolio/adidas.php'); ?> 
        <?php include('portfolio/mcdonalds.php'); ?> 
        <?php include('portfolio/lenovo.php'); ?> 
        <?php include('portfolio/thecanyons.php'); ?> 
        <?php include('portfolio/thefollowing.php'); ?> 
        <?php include('portfolio/theironlady.php'); ?> 
        <?php include('portfolio/royalpains.php'); ?> 
        <?php include('portfolio/battleoftheexes.php'); ?> 
        <?php include('portfolio/kinectstarwars.php'); ?> 
        <?php include('portfolio/thesacred.php'); ?> 
        <?php include('portfolio/thechallengerivals.php'); ?> 
        <?php include('portfolio/dirt3.php'); ?> 
        <?php include('portfolio/fastfive.php'); ?> 
        <?php include('portfolio/testdriveunlimited2.php'); ?>
        <?php include('portfolio/trueblood.php'); ?> 
        <?php include('portfolio/onetreehill.php'); ?>
    </div>
</div>

<?php
require_once 'views/footer.php';
?>
