# FunnelKit X/Twitter Conversion Tracking

FunnelKit_sample.php is a wrapper in which you can place a script for purchase event tracking with all variables (original here: https://gist.github.com/xlplugins/29d313af3479796defef22a225bba815).

Add a tracking snippet and use commented variables here: https://imgur.com/Q4peCDr to make the tracking snippet dynamic and add final snippet to your child theme functions.php file.

For example, you can get Total in this snippet using this variable here: https://i.imgur.com/tRAneai.png like this "wfocu_tracking_data.total" to get Total and pass to your tracking snippet.

Similarly, you can pass other order variables as well, as commented in the script.

This will properly track purchase events as we fire purchase events for the main order on the upsell page. And if the offer is accepted, the net purchase event is fired on the next step.

So like this even if user left from the offer page without reaching the Thank you page, it will still track the purchase.

## X/Twitter Conversion Tracking
x_conversion_tracking.php is working example of X conversion tracking using this FunnelKit wrapper