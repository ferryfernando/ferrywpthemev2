<?php
    $sticky = get_option( 'sticky_posts' );
    
    $args = array(
        'posts_per_page' => 1,
        'post__in' => $sticky,
        'ignore_sticky_posts' => 1
    );

    $query = new WP_Query( $args );

    if($query->have_posts()) :
        $i = 1;
        while($query->have_posts()) : $query->the_post();
        $id = get_post_thumbnail_id();
	$img_src = esc_attr(wp_get_attachment_image_url( $id ));
	$img_srcset = wp_get_attachment_image_srcset( $id );
	$img_alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
	// $image_title = get_the_title();

	echo "<img src='$img_src' srcset='$img_srcset' alt='$img_alt' sizes='100vw'>";
        
        $i++;endwhile;
    endif;
    wp_reset_postdata(  )  ;
?>