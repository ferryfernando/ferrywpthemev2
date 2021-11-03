<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-0">
        <?php 
            while (have_posts()) : the_post(); ?>
            <article class="px-3">
                <h1 class="mt-4 fw-bold text-primary"><?php the_title( ); ?></h1>
                <ul class="list-inline">
                    <li class="list-inline-item text-muted small"><i class="bi bi-calendar4-event"></i> <?php the_date( 'l, d F Y' ); ?></li>
                    <li class="list-inline-item text-muted small"><i class="bi bi-folder2"></i> <?php the_category( '' ); ?></li>
                </ul>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <img class="img-fluid" src="http://placehold.it/900x300" alt="placehold.it">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

                <figure>
                    <blockquote class="blockquote">
                        <p>A well-known quote, contained in a blockquote element.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                    </figure>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

            </article>
            <?php endwhile;
        ?>
            </div> <!-- /col-md-9-->
            

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