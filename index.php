<?php

get_header( );

echo "Index <br>";

$args = array(  

);

$tags = get_tags( $args );

foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
            
    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a>";

    // echo '<a href="'.get_tag_link( $tag->term_id ).'" class="btn btn-outline-primary btn-sm rounded-0 m-1">'.$tag->name.'</a>' ;
    echo get_tag_link( $tag->term_id );
    echo '<a href="'. get_tag_link( $tag->term_id ) .'" class="btn btn-outline-primary btn-sm rounded-0 m-1 '. (get_tag_link( $tag->term_id ) == get_tag_link( get_query_var( 'tag' ) ) ? 'active' : '') .' ">' . $tag->name . '</a>';
}


$tags = get_tags();
$query = new WP_Term_Query(array(
	'object_ids' =>  get_the_ID(),
	'fields'     => 'ids',
));
$current = $query->get_terms();
if ( $tags ) {
	foreach ( $tags as $tag ) {
		$classes = in_array( $tag->term_id, $current )?'btn btn-outline-primary btn-sm rounded-0 m-1 active':'btn btn-outline-primary btn-sm rounded-0 m-1';
		printf('<a class="%1$s" href="%2$s">%3$s</a>',
		    $classes,
		    get_tag_link( $tag->term_id ),
		    $tag->name
		);
	}
}

get_footer( );

?>
 



