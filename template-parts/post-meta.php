<?php
if ( is_front_page() ) :
    ?>
    <ul class="list-inline mb-0">
    <?php
else :
    ?>
    <ul class="list-inline">
    <?php
endif;
?>
    <li class="list-inline-item text-muted small"><i class="bi bi-calendar4-event"></i> <?php the_time( 'l, d F Y' ); ?></li>
    <li class="list-inline-item text-muted small"><i class="bi bi-folder2"></i> <?php the_category(' '); ?></li>
    <?php
        if(has_tag()) {
            ?>
            <li class="list-inline-item text-muted small"><i class="bi bi-tags"></i> <?php the_tags(' '); ?></li>
            <?php
        } 
    ?>
</ul>