<?php

/**
 * MMWPWA Container
 */

defined('ABSPATH') or die('No script kiddies please!');







add_action('wp_footer', 'mmwpwa_greeting');
function mmwpwa_greeting()
{
    $greeting = 'Hello World!';
?>
    <div id="mmwpwa-greeting" class="mmwpwa-position mmwpwa-greeting">
        <p><?php echo $greeting; ?></p>
    </div>
<?php
}
