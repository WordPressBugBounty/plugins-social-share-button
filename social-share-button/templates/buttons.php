<?php
if ( ! defined('ABSPATH')) exit;  // if direct access



ob_start();

?>
<a target="_blank" href="<?php echo esc_url($url); ?>" post-id="<?php echo esc_attr(get_the_ID()); ?>" class="share-button share-button-<?php echo esc_attr(get_the_ID()); ?> <?php echo esc_attr($site_info['id']); ?>" id="<?php echo esc_attr($site_info['id']); ?>" data-nonce="<?php echo esc_attr( wp_create_nonce( 'social_share_button_nonce' ) ); ?>">

<span class="button-icon"><?php echo esc_html($site_info['icon']); ?></span>
<span class="button-name"><?php echo esc_html($site_info['title']); ?></span>

<?php
if($social_share_button_count_format=='short'){
    $share_count_value = social_share_button_number_short($share_count_value);
	}
?>
<span class="button-count"><?php echo esc_html($share_count_value); ?></span>

</a>

<?php 

$html_button .= ob_get_clean();