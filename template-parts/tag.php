<!-- Tags-->
<div class="card mb-4 border-0 rounded-0">
    <div class="card-header border-0 rounded-0">Tags</div>
    <div class="card-body">

        <?php 
            // $tags = get_tags();
            // $query = new WP_Term_Query(array(
            //     'object_ids' =>  get_the_ID(),
            //     'fields'     => 'ids',
            // ));
            // $current = $query->get_terms();
            // if ( $tags ) {
            //     foreach ( $tags as $tag ) {
            //         $classes = in_array( $tag->term_id, $current )?'btn btn-outline-primary btn-sm rounded-0 m-1 active':'btn btn-outline-primary btn-sm rounded-0 m-1';
            //         printf('<a class="%1$s" href="%2$s">%3$s</a>',
            //             $classes,
            //             get_tag_link( $tag->term_id ),
            //             $tag->name
            //         );
            //     }
            // }

            $args = array(
                // 'hide_empty' => TRUE,
                // 'current_category' => 1,
                // 'exclude' => 2,
            );

            $tags = get_tags( $args );
            
            foreach( $tags as $tag ) {
                // if (get_category_link( $category->term_id ) == get_category_link( get_query_var( 'cat' ) ) {$a = 1});
                echo '<a href="'. get_tag_link( $tag->term_id ) .'" class="btn btn-outline-primary btn-sm rounded-0 m-1 '. (get_tag_link( $tag->term_id ) == get_tag_link( get_query_var( 'tag_id' ) ) ? 'active' : '') .' ">' . $tag->name. '</a>';
            } 
            wp_reset_postdata();
        ?>
    </div>
</div> <!-- /tags -->