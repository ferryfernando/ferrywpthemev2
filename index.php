<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
        
            <!-- Post-->
            <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?> 
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
                                            <li class="list-inline-item text-muted small"><i class="bi bi-folder2"></i><a href="#" class="text-pink"> <?php the_category(' '); ?></a></li>
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
            ?>

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
                            <a href="kategori.html"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0">Musik
                                <span class="badge rounded-pill bg-primary">1</span></a>
                            <a href="kategori.html"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0">Komputer
                                <span class="badge rounded-pill bg-primary">6</span></a>
                            <a href="kategori.html"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0">Film
                                <span class="badge rounded-pill bg-primary">3</span></a>
                            <a href="kategori.html"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0">Tidak
                                Berkategori <span class="badge rounded-pill bg-primary">5</span></a>
                        </div>
                    </div>
                    <!--/kategori-->

                    <!-- Tags-->
                    <div class="card mb-4 border-0 rounded-0">
                        <div class="card-header border-0 rounded-0">Tags</div>
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-0 m-1">Laravel</a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-0 m-1">PHP</a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-0 m-1">Perang</a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-0 m-1">Meme</a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-0 m-1">Aksi</a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-0 m-1">Komputer</a>
                        </div>
                    </div>
                    <!--/tags-->
                </div> <!-- /sticky-->
            </div> <!-- /col-md-3-->
    </div>
</div>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>