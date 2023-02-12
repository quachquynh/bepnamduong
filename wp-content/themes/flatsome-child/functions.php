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
remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
add_action('woocommerce_shop_loop_item_title', 'abChangeProductsTitle', 10 );
function abChangeProductsTitle() {
    echo '<h3><a href="'.get_the_permalink().'">' . rwmb_meta( 'product-code' ) . '</a></h3>';
}

function add_button_product_item() {?>
	<a href="<?php get_the_permalink(get_the_ID());?>">
		<div class="button-footer-product">
        <span>XEM HÀNG</span>
        <span>MUA HÀNG</span>
    </div>
	</a>
<?php }
add_action('flatsome_product_box_after', 'add_button_product_item');