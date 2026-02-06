<?php
if ( ! defined('ABSPATH')) exit;  // if direct access

if($social_share_button_count_format=='short'){


    $share_count_value = social_share_button_number_short($share_count_value);
}



ob_start();

?>
<a target="_blank" href="<?php echo esc_url($url); ?>" post-id="<?php echo esc_attr(get_the_ID()); ?>" class="share-button share-button-<?php echo esc_attr(get_the_ID()); ?> <?php echo esc_attr($site_info['id']); ?>" id="<?php echo esc_attr($site_info['id']); ?>" >

<span class="button-icon"><?php echo wp_kses_post($site_info['icon']); ?></span>
<span class="button-name"><?php echo wp_kses_post($site_info['title']); ?></span>
<span class="button-count"><?php echo wp_kses_post($share_count_value); ?></span>				

</a>
<?php 

$html_popup_buttons .= ob_get_clean();