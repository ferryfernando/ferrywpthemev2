<!-- Bulan -->
<?php 
    $args = array(
        'type'            => 'monthly',
        'limit'           => '',
        'format'          => 'custom',
        'before'          => '',
        'after'           => '',
        'show_post_count' => true,
        'echo'            => 1,
        'order'           => 'DESC'
    );
?>

<div class="card mb-4 border-0 rounded-0">
    <div class="card-header border-0 rounded-0">
        <p class="m-0">Berdasarkan Bulan</p>
    </div>
    <div class="card-body list-group pt-0 pe-0" id="ahua">
        <?php
            wp_get_archives( $args );
        ?>
    </div>
</div> <!--/bulan-->