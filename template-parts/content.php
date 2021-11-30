<!-- Post-->
<article>
    <div class="card border-top-0 border-start-0 border-end-0 rounded-0 ps-sm-3">
        <div class="row g-0">
            <div class="col-sm-3 d-none d-sm-block my-auto py-xl-3">
                <?php
                    if (has_post_thumbnail()) { ?>
                        <img src="<?php the_post_thumbnail_url('small'); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute() ?>">
                <?php 
                    } else { ?>
                        <img src="https://via.placeholder.com/200x150?text=Gambar+Post" class="img-fluid" alt="https://via.placeholder.com/300x150?text=Gambar+Post">
                <?php 
                    }
                ?> 
            </div>
            <div class="col-sm-9">
                <div class="card-body">
                    <h3 class="card-title mb-0"><a href="<?php the_permalink(); ?>" class="text-pink"><?php the_title(); ?></a></h3>
                    <?php get_template_part( 'template-parts/post-meta' ) ?>   
                    <p class="card-text"><?php echo wp_strip_all_tags(get_the_excerpt(), true); ?></p>
                </div>
            </div>
        </div>
    </div>
</article> <!-- /Post -->