<?php
function dev_test_files(){
    wp_enqueue_style('dev_test_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'dev_test_files');

?>