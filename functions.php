<?php

add_action( 'after_setup_theme', 'bellaria_child_theme_setup' );
function bellaria_child_theme_setup() {
    load_child_theme_textdomain( 'bellaria', get_stylesheet_directory() . '/languages' );
}

?>
