add_action( 'woocommerce_thankyou', 'custom_woocommerce_paid_order_status', 10, 1 );
 
function custom_woocommerce_paid_order_status( $order_id ) {
    if ( ! $order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );

    // Target your "your_payment_gateway_slug" with this conditional
    if ( is_object( $order ) && $order->get_payment_method() === 'cod' ) {
        $order->update_status( 'cod-processing' );
    }

    return;
}
