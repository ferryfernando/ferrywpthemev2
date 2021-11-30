<?php

get_header( );

echo "Index <br>";;

echo get_permalink( ) ;
echo '<br>';

if (is_category( 'musik' )) {
    echo 'Kat 3';
} else {
    echo 'Bukan';
}

echo '<br>';

echo is_category( 'film' ) ? 'film' :  'bukan film';

get_template_part( 'sidebar' );

echo get_permalink( );
echo "--<br>";

echo get_permalink( get_page_by_path( 'film' ) );
echo "-- <br>";

global $post;
$post_slug = $post->post_name;
echo $post_slug;

$the_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
$slug = $the_page->post_name;
echo "slug1: .$slug.' <br>";


if (is_category( array(1,2,3,4,5 ))) {
    echo 'Kat 3 <br>';
} else {
    echo 'Bukan <br>';
}

$current_url = get_permalink( get_the_ID() );
if( is_category() ) $current_url = get_category_link( get_query_var( 'cat' ) );
echo "current: .$current_url.  <br> "; 


$the_cat = get_the_category();

$category_name = $the_cat[0]->cat_name;

$category_link = get_category_link( $the_cat[0]->cat_ID );

wp_list_categories( 'current_category=1' );

?>
 



