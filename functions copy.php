<?php

if ( ! function_exists( 'ferrywpthemev2_setup' ) ) :
		function ferrywpthemev2_setup()	{
			add_theme_support( 'title-tag' );
			
			//Add featured image support
			add_theme_support('post-thumbnails');
			
			register_nav_menus(
				array(
				  'primary-nav' => esc_html__( 'Primary Nav', 'ferrywpthemev2' ),
				  'extra-menu' => __( 'Extra Menu' )
				)
			);
		}
endif; // ferrywpthemev2_setup
add_action( 'after_setup_theme', 'ferrywpthemev2_setup' );

function ferrywpthemev2_scripts() {
	wp_enqueue_style( 'bootstrap-sytle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css' );
	wp_enqueue_style( 'ubuntu-font', 'https://fonts.googleapis.com/css?family=Ubuntu&display=swap' );
	wp_enqueue_style( 'ferrywpthemev2-style', get_stylesheet_uri() );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'ferrywpthemev2_scripts' );

/**
 * Register and Enqueue Script.
 * Place at footer.
 */
function ferrywptheme_footer() {
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_footer', 'ferrywptheme_footer');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker() {
	require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Manggil image responsive
 */
function ferrywptheme_image() {
	$id = get_post_thumbnail_id();
	$img_src = esc_attr(wp_get_attachment_image_url( $id ));
	$img_srcset = wp_get_attachment_image_srcset( $id );
	$img_alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
	// $image_title = get_the_title();

	//echo "<img src='$img_src' srcset='$img_srcset' alt='$img_alt' sizes='100vw'>";
	echo "<img class='d-block w-100' src='$img_src' srcset='$img_srcset' alt='$img_alt' title='$img_alt' >";

}

/**
 * Bootstrap Pagination 
 */
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links( array_merge( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
			'prev_text'    => __('‹'),
			'next_text'    => __('›'),
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if ( is_array( $pages ) ) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<nav class="nav-bb pt-4 pb-2 d-flex justify-content-center" aria-label="Page navigation"><ul class="pagination">';

        foreach ( $pages as $page ) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul></nav>';

        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

add_filter ('get_archives_link',
function ($link_html, $url, $text, $format, $before, $after) {
    if ('aaaa' == $format) {
        
        global $wp;
        $current_url = home_url( add_query_arg( array(), $wp->request ) );

        $active_classname =  $current_url === $url ? 'active' : 'ddd';
        $pc = $wp->post_count;

        $link_html = "<a href=\"$url\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0  $active_classname\">$text $show_post_count</a>";
    }
    return $link_html;
}, 10, 6);  

/**
 * Adds a span around post counts in the archive widget.
 *
 * @param   string  $links      The comment fields.
 * @return  string
 */
// function wpdocs_archive_count_span( $dsfsd ) {
//     $dsfsd = str_replace( '</a>&nbsp;(', '<span class="badge rounded-pill bg-primary">', $dsfsd );
//     $dsfsd = str_replace( ')', '</span></a>', $dsfsd );
//     return $dsfsd;
// }
// add_filter( 'get_archives_link', 'wpdocs_archive_count_span' );


// function ahua( $link_html, $url, $format, $text, $before, $after ) {
//     if ( 'link' === $custom ) {
//     $link_html = "\t$before<a href='$url'$aria_current>$text</a>$after\n";
//     }
//     return $link_html;
// }
// add_filter( 'get_archives_link', 'ahua' );

?>