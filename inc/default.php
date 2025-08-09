<?php
/*
* Theme Title 
*/
add_theme_support('title-tag');

// Thumbnails image area
add_theme_support('post-thumbnails', array('post', 'page'));
add_image_size('custom-thumb', 970, 350, true);

// Exerpt to 40 word
function saiful_excerpt_length($length){
    return 20;
}
add_filter('excerpt_length', 'saiful_excerpt_length');

function saiful_excerpt_more($more) {
    return '<br><br><a class="excerpt_more" href="' . get_permalink(get_the_ID()) . '">Read More</a>';
}
add_filter('excerpt_more', 'saiful_excerpt_more', 999);

// Pagenav function
function saiful_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999, '%#%', get_pagenum_link(999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if($max > 1) echo '<pre>
        <div class="wp_pagenav">';
            if($total == 1 && $max > 1) $pages = '<p class="pages">Page' . $current . '<span>of</span>' . $max . '</p>';
            echo $pages . pagenate_link($args);
            if($max > 1) echo ' </div></pre>';
}
// changed