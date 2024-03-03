add_filter( 'user_has_cap', 'bbloomer_order_pay_without_login', 9999, 3 );
 
function bbloomer_order_pay_without_login( $allcaps, $caps, $args ) {
   if ( isset( $caps[0], $_GET['key'] ) ) {
      if ( $caps[0] == 'pay_for_order' ) {
         $order_id = isset( $args[2] ) ? $args[2] : null;
         $order = wc_get_order( $order_id );
         if ( $order ) {
            $allcaps['pay_for_order'] = true;
         }
      }
   }
   return $allcaps;
}
 
add_filter( 'woocommerce_order_email_verification_required', '__return_false', 9999 );
