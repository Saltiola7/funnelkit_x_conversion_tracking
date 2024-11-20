/**
 * Rendering Custom tracking script for thank you and upsell pages. 
 * https://gist.github.com/xlplugins/29d313af3479796defef22a225bba815
 * @param $general_data
 */
function render_custom_script_tracking( $general_data ) {
   ?>
   <script type="text/javascript">
      if (undefined !== wfocu_tracking_data && '' !== wfocu_tracking_data) {
         let order_id = '';
         if ("undefined" !== typeof wfocu_tracking_data.ga_transaction_id && '' !== wfocu_tracking_data.ga_transaction_id) {
            order_id = wfocu_tracking_data.ga_transaction_id;
         }else if ("undefined" !== typeof wfocu_tracking_data.transaction_id){
            order_id = wfocu_tracking_data.transaction_id;
         }

         
         //PASTE YOUR SCRIPT HERE
         
         //USE THESE DYNAMIC VARIABLES IN YOUR SCRIPT
         //wfocu_tracking_data.total                //For order total
         //wfocu_tracking_data.currency             //For order currency
         //wfocu_tracking_data.ga_transaction_id    //For order ID
         //wfocu_tracking_data.email                //For order Email
         //wfocu_tracking_data.first_name           //For order user First name
         //wfocu_tracking_data.last_name            //For order user Last name
         //wfocu_tracking_data.revenue              //For order total or revenue
         //wfocu_tracking_data.shipping             //For order Shipping cost
         //wfocu_tracking_data.tax                  //For order Tax

         // You can now use wc_order_data.billing_address_1, wc_order_data.billing_city, etc. in your custom script
      }
   </script>
   <?php
}
add_action( 'wfocu_custom_purchase_tracking', 'render_custom_script_tracking' );