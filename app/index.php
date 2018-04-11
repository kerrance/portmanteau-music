<?php
require_once 'views/header.php';
?>

<?php
require_once 'views/hero.php';
?>

<div class="content">
    <div class="feature">
        <div class="container">
            <div class="col-md-12">
                <p class="exclaim half">
                    Some of our recent placements...
                </p>
            </div>
        </div>
    </div>

    <div class="placements">
        <div class="container">
            <?php
            $slug = "mcdonalds";
            $embed = "//www.youtube.com/embed/qIvY73HfJWM";
            $image = "/images/portfolio/mcdonalds.jpg";
            $project = "Parallel Lives";
            $client = "McDonald's";
            $placements = [
                "'Like A Boss' by Eptic",
                "'Sick Style' (feat. Maksim) <br />
                (Dub Mix) by Habstrakt"
            ];

            include 'partials/placement.php';

            unset($slug, $embed, $image, $project, $client, $placements);
            ?>

            <!-- 
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
            -->
        </div>
    </div>
</div>

<?php
require_once 'views/footer.php';
?>
