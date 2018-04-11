<section
class="placement"
<?php
if(isset($slug)) {
    echo ' id="' . strtolower($slug) . '"';
}
?>
>
<div class="col-xs-12 col-sm-6">
    <?php
    if(isset($embed)) {
        echo '<iframe width="340" height="191" src="' . $embed . '" frameborder="0" allowfullscreen></iframe>';
    } else {
        echo '<img src="' . $image . '">"';
    };
    ?>

    <dl>
        <dt>Project</dt>
        <dd><?php echo $project ?></dd>
        <dt>Client</dt>
        <dd><?php echo $client ?></dd>
        <dt>Placement</dt>
        <?php foreach($placements as $placement) {
            echo '<dd>' . $placement . '</dd>';
        } 
        ?>
    </dl>
</div>
</section>
