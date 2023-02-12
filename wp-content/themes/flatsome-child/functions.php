<?php

add_filter( 'rwmb_meta_boxes', 'product_metabox' );
function product_metabox( $meta_boxes ) {
    $meta_boxes[] = [
        'title'   => esc_html__( 'Menu', 'online-generator' ),
        'post_types' => 'product',
        'context' => 'normal',
        'fields'  => [
            [
                'id'      => 'product-code',
                'name'    => 'Mã sản phẩm',
                'type'    => 'text'
            ],
        ],
    ];
    
    return $meta_boxes;
}

/*
 * WC Hooks
 */
function product_code() {

}
add_filter();