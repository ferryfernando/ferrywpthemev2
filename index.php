<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
        
            <!-- Carousel -->
            <div id="carouselExampleDark" class="carousel carousel-dark slide p-0" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <?php
                            $sticky = get_option( 'sticky_posts' );
                            
                            $args = array(
                                'posts_per_page' => 3,
                                'post__in' => $sticky,
                                'ignore_sticky_posts' => 1
                            );

                            $query = new WP_Query( $args );

                            if($query->have_posts()) :
                                $i = 1;
                                while($query->have_posts()) : $query->the_post(); ?>
                        
                                <div class="carousel-item <?php if ($i == 1) echo 'active' ;?>">
                                    <?php ferrywptheme_image(); ?>
                                    <div class="carousel-caption">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                        <ul class="list-inline">
                                            <li class="list-inline-item text-white small"><i class="bi bi-calendar4-event"></i> <?php the_time('l, d F Y') ?></li>
                                            <li class="list-inline-item text-white small"><i class="bi bi-folder2"></i> <?php the_category(' '); ?></li>
                                        </ul>   
                                        <p class="d-none d-sm-block text-white"><?php echo wp_strip_all_tags(get_the_excerpt(), true); ?></p>
                                    </div>
                                </div>  
                                
                            <?php $i++;endwhile;
                            endif;
                            wp_reset_postdata(  )  ;
                        ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> <!-- /Carausel-->

            <!-- Post-->
            <?php 
                // Example argument that defines three posts per page. 
                $args = array( 
                    // 'posts_per_page' => 3,
                    'post__not_in' => get_option( 'sticky_posts' ) 
                ); 
                
                // Variable to call WP_Query. 
                $query = new WP_Query( $args ); 

                if ( $query->have_posts() ) : 
                    while ( $query->have_posts() ) : $query->the_post(); ?> 
                    <article>
                        <div class="card border-top-0 border-start-0 border-end-0 rounded-0 ps-sm-3">
                            <div class="row g-0">
                                <div class="col-sm-3 d-none d-sm-block my-auto py-xl-3">
                                    <?php
                                        if (has_post_thumbnail()) { ?>
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute() ?>">
                                    <?php 
                                        } else { ?>
                                            <img src="https://via.placeholder.com/200x150?text=Gambar+Post" class="card-img" alt="https://via.placeholder.com/200x150?text=Gambar+Post">
                                    <?php 
                                        }
                                    ?> 
                                </div>
                                <div class="col-sm-9">
                                    <div class="card-body">
                                        <h3 class="card-title mb-0"><a href="<?php the_permalink(); ?>" class="text-pink"><?php the_title(); ?></a></h3>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item text-muted small"><i class="bi bi-calendar4-event"></i> <?php the_time('l, d F Y') ?></li>
                                            <li class="list-inline-item text-muted small"><i class="bi bi-folder2"></i> <?php the_category(' '); ?></li>
                                        </ul>
                                        <p class="card-text"><?php echo wp_strip_all_tags(get_the_excerpt(), true); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php
                    endwhile; 
                else: 
                    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
                endif; 
                wp_reset_postdata(); 
            ?> <!-- /post -->

            <!-- pagination -->
            <nav class="nav-bb py-4 d-flex justify-content-center">
                <a href="blog" class="btn btn-sm btn-outline-primary rounded-0">Lihat Post Lainnya</a>
            </nav> <!-- /pagination-->
        </div> <!-- /.col-md-9 -->

        <div class="col-md-3 px-0 px-md-3">
            <div class="sticky-top pt-4 sticky-ahua">
                <?php get_search_form( ); ?>
                
                <!-- Kategori -->
                <div class="card mb-4 border-0 rounded-0">
                    <div class="card-header border-0 rounded-0">
                        <p class="m-0">Kategori</p>
                    </div>
                    <div class="card-body list-group pt-0 pe-0">
                        <?php 
                            $args = array(
                                // 'hide_empty' => TRUE,
                            );

                            $categories = get_categories( $args );
                            
                            foreach( $categories as $category ) {
                                echo '<a href="'. get_category_link( $category->term_id ) .'" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0">' . $category->name . ' <span class="badge rounded-pill bg-primary">' . $category->category_count . '</span></a>';
                            } 
                        ?>
                    </div>
                </div> <!--/kategori-->

                <!-- Tags-->
                <div class="card mb-4 border-0 rounded-0">
                    <div class="card-header border-0 rounded-0">Tags</div>
                    <div class="card-body">

                        <?php 
                            $args = array(  

                            );

                            $tags = get_tags( $args );

                            foreach ( $tags as $tag ) {
                                $tag_link = get_tag_link( $tag->term_id );
                                        
                                $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                $html .= "{$tag->name}</a>";

                                echo '<a href="'.get_tag_link( $tag->term_id ).'" class="btn btn-outline-primary btn-sm rounded-0 m-1">'.$tag->name.'</a>' ;
                            }
                        ?>
                    </div>
                </div> <!-- /tags -->
            </div> <!-- /sticky-->
        </div> <!-- /col-md-3-->
    </div> <!-- /row -->
</div> <!-- /container-fluid -->

<!-- Footer-->
<footer class="py-4 bg-dark-ffe text-light">
    <p class="m-0 text-center">Ferry Fernando</p>
</footer> <!-- /footer-->


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>