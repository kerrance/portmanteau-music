<?php
require_once 'views/header.php';
?>

<?php
require_once 'views/hero.php';
?>

<div class="content">
    <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        Some of our recent placements...
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="placements">
        <div class="container">
            <div class="row">
                <?php
                $slug = "the-walking-dead";
                $project = "The Walking Dead, Season 5";
                $client = "AMC";
                $embed = "https://www.youtube.com/watch?v=sUlVo-jvG1o";
                $provider = "YouTube";
                $placements = [
                    "'Love and Mercy' by Gazelle Twin"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "extant";
                $project = "Extant, Season 2";
                $client = "CBS Television Studios";
                $placements = [
                    "'Deceive (feat. Sune Rose Wagner)' by Trentemøller"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "adidas-2";
                $project = "Adidas Originals: NBA Party";
                $client = "Adidas";
                $embed = "//player.vimeo.com/video/80781460";
                $provider = "Vimeo";
                $placements = [
                    "'P.A.R.T.Y. (feat. Wax &amp; Herbal T)' by Lack of Afro"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>
            </div>

            <div class="row">
                <?php
                $slug = "freeview";
                $project = "Hundreds and Thousands";
                $client = "Freeview";
                $embed = "https://www.youtube.com/watch?v=zxfnZx2dMto";
                $provider = "YouTube";
                $placements = [
                    "'Everest' by Public Service Broadcasting"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "adidas";
                $project = "ZX100";
                $client = "Adidas";
                $embed = "https://www.youtube.com/watch?v=40eQl9MpnaY";
                $provider = "YouTube";
                $placements = [
                    "'ZX100' by TronMajor"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "mcdonalds";
                $project = "Parallel Lives";
                $client = "McDonald's";
                $embed = "https://www.youtube.com/watch?v=qIvY73HfJWM";
                $provider = "YouTube";
                $placements = [
                    "'Like A Boss' by Eptic",
                    "'Sick Style' (feat. Maksim) <br />
                    (Dub Mix) by Habstrakt"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>
            </div>

            <div class="row">
                <?php
                $slug = "lenovo";
                $project = "The Pursuit";
                $client = "Lenovo";
                $embed = "https://www.youtube.com/watch?v=TAbuxj4KsDw";
                $provider = "YouTube";
                $placements = [
                    "'The Pursuit' by Aeph"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "the-canyons";
                $project = "The Canyons";
                $placements = [
                    "'February Blues' by Cheval Sombre"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "the-following";
                $project = "The Following";
                $client = "Fox Broadcasting Company";
                $placements = [
                    "'Fade Into You (Feat. Steffaloo)' by Stumbleine"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>
            </div>

            <div class="row">
                <?php
                $slug = "the-iron-lady";
                $project = "The Iron Lady";
                $client = "Pathé";
                $placements = [
                    "'I'm In Love With Margaret Thatcher' by Notsensibles"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "royal-pains";
                $project = "Royal Pains";
                $client = "Universal";
                $placements = [
                    "'Danz' by Swiss Lips"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "battle-of-the-exes";
                $project = "Battle of the Exes";
                $client = "MTV";
                $placements = [
                    "'Shake (Sawgood Dub Version)' by Wrestling Gang Bang"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>
            </div>

            <div class="row">
                <?php
                $slug = "kinect-star-wars";
                $project = "Kinect Star Wars";
                $client = "LucasArts";
                $embed = "https://www.youtube.com/watch?v=HVr1XA0RXeM";
                $provider = "YouTube";
                $placements = [
                    "'Demons' by South Central"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "the-sacred";
                $project = "The Sacred";
                $client = "Incognito Pictures";
                $placements = [
                    "'The Distance From A to B' by Sennen"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "the-challenge-rivals";
                $project = "The Challenge: Rivals";
                $client = "MTV";
                $placements = [
                    "'Sword' by South Central"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>
            </div>

            <div class="row">
                <?php
                $slug = "dirt-3";
                $project = "DiRT 3";
                $client = "Codemasters";
                $embed = "https://www.youtube.com/watch?v=z1Y6_N23tJo";
                $provider = "YouTube";
                $placements = [
                    "'Demons' by South Central"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>
                
                <?php
                $slug = "fast-five";
                $project = "Fast Five";
                $client = "Codemasters";
                $embed = "https://www.youtube.com/watch?v=YtYUWKlx8AQ";
                $provider = "YouTube";
                $placements = [
                    "'Demons' by South Central"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "test-drive-unlimited-2";
                $project = "Test Drive Unlimited 2";
                $client = "Atari";
                $placements = [
                    "'Don't Surrender' by The Taller Boy"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>
            </div>

            <div class="row">
                <?php
                $slug = "true-blood";
                $project = "True Blood";
                $client = "HBO";
                $placements = [
                    "'SOS' by Sennen"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>

                <?php
                $slug = "one-tree-hill";
                $project = "One Tree Hill";
                $client = "The CW";
                $placements = [
                    "'Bizarre Love Triangle' by Sennen"
                ];

                include 'partials/placement.php';

                unset($slug, $embed, $project, $client, $placements, $provider);
                ?>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'views/footer.php';
?>
