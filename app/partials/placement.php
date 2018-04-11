<section
class="placement col-xs-12 col-sm-4"
<?php
if(isset($slug)) {
    echo ' id="' . strtolower($slug) . '"';
}
?>
>
<?php
if(isset($embed)) {
    echo '
    <a href=" '. $embed . '" target="_blank">
        <img 
            src="/images/portfolio/' . $slug . '.jpg" 
            srcset="
            /images/portfolio/' . $slug . '.jpg 1x,
            /images/portfolio/' . $slug . '@2x.jpg 2x" 
            alt="' . $project . '" 
            width="300px" 
            height="167px" 
            class="img-responsive"
        >
    </a>';
} else {
    echo '
    <img 
        src="/images/portfolio/' . $slug . '.jpg" 
        srcset="
        /images/portfolio/' . $slug . '.jpg 1x,
        /images/portfolio/' . $slug . '@2x.jpg 2x" 
        alt="' . $project . '" 
        width="300px" 
        height="167px" 
        class="img-responsive"
    >';
};
?>

<dl>
    <?php
    if(isset($project)) {
        echo '<dt>Project</dt><dd>' . $project . '</dd>';
    };
    ?>

    <?php
    if(isset($client)) {
        echo '<dt>Client</dt><dd>' . $client . '</dd>';
    };
    ?>

    <dt>Placement</dt>
    <?php foreach($placements as $placement) {
        echo '<dd>' . $placement . '</dd>';
    } 
    ?>
</dl>

<?php
if(isset($embed)) {
    echo '<a href=" '. $embed . '" target="_blank"><button type="button" class="btn btn-primary">Watch "'. $project . '" on '. $provider .'</button></a>';
};
?>
</section>
