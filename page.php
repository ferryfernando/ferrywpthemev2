<?php get_header( ); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
            <article class="px-3">
                <h1 class="mt-4 fw-bold text-primary"><?php the_title( ); ?></h1>
                <?php the_content() ?>
            </article> 
        </div> <!-- /.col-md-9 -->

        <?php get_template_part( 'sidebar' ); ?>
        
    </div> <!-- /row -->
</div> <!-- /container-fluid -->

<?php get_footer(); ?>


