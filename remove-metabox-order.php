add_action('add_meta_boxes', 'remove_woocommerce_order_metaboxes', 50);
function remove_woocommerce_order_metaboxes()
{
    remove_meta_box('woocommerce-order-downloads', wc_get_page_screen_id( 'shop-order' ) , 'normal');
	remove_meta_box('order_custom', wc_get_page_screen_id( 'shop-order' ) , 'normal');
}
