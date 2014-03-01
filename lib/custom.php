<?php
/**
 * Custom functions
 */

function my_facetwp_index_row( $params ) {
    $excluded = array( 'USA' );

    // Ignore this value if it's in the above list
    if ( 'front_page' == $params['facet_name'] && in_array( $params['facet_display_value'], $excluded ) ) {
        return false;
    }
    return $params;
}

add_filter( 'facetwp_index_row', 'my_facetwp_index_row' );