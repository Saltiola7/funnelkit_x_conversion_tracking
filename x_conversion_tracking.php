<?php
/**
 * Rendering Custom tracking script for thank you and upsell pages. 
 *
 * @param $general_data
 */
function render_custom_script_tracking( $general_data ) {
   ?>
   <script type="text/javascript">
      if (undefined !== wfocu_tracking_data && '' !== wfocu_tracking_data) {
         let order_id = '';
         if (typeof wfocu_tracking_data.ga_transaction_id !== 'undefined' && wfocu_tracking_data.ga_transaction_id) {
            order_id = wfocu_tracking_data.ga_transaction_id;
         } else if (typeof wfocu_tracking_data.transaction_id !== 'undefined') {
            order_id = wfocu_tracking_data.transaction_id;
         }
         
         // Twitter conversion tracking event code
         twq('event', '', { //Replace with your event id
            value: wfocu_tracking_data.total, // Using order total for value
            currency: wfocu_tracking_data.currency, // Using order currency
            contents: [
               {
                  content_type: 'product', // Assuming "product" as content type
                  content_id: wfocu_tracking_data.products.product_id, // Using product_id from the products object
                  content_name: wfocu_tracking_data.products.name, // Using product name
                  content_price: wfocu_tracking_data.products.price, // Using product price 
                  num_items: wfocu_tracking_data.products.quantity, // Using product quantity
                  content_group_id: wfocu_tracking_data.products.category // Using product category (adjust if needed)
               }
            ], 
            conversion_id: order_id // Using order ID for deduplication
         });
      }
   </script>
   <?php
}
add_action( 'wfocu_custom_purchase_tracking', 'render_custom_script_tracking' );
?>