<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
            <div class="alert alert-secondary" role="alert">
                Pencarian Untuk: <?php the_search_query(); ?>
            </div>
            <?php 
                if (have_posts() && $_GET['s'] != '') :
                    while (have_posts()) : the_post();
                        get_template_part( 'template-parts/content' );
                    endwhile;
                    echo bootstrap_pagination();
                else :
                    echo '<p class="text-danger ps-3">Tidak ada konten.</p>';
                endif; 
                wp_reset_postdata();
            ?> 
        </div>
        <?php get_template_part( 'sidebar' );?>
    </div> <!-- /row -->
</div> <!-- /container-fluid -->

<?php get_footer(); ?>