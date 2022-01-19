<?php

/**
 * Adds new category called Quiritibus to Gutenberg's Block Pattern categories.
 * 
 * Uses the in-built function of WordPress called register_block_pattern_category
 * to add Quiritibus as a new Block Pattern category. It takes two parameters,
 * the first one defines the name used in code to be quiritibus, the second is an
 * array defining the properties of the category. In this case, it defines the
 * label, which itself takes a string that gets displayed in Gutenberg, and the
 * name of the plugin.
 * 
 * @since 1.0.0
 */
function quiritibus_block_pattern_categories() {
    
    register_block_pattern_category(
        'quiritibus',
        array(
            'label' => __( 'Quiritibus', 'quiritibus-plugin' ),
        )
    );

}

add_action( 'init', 'quiritibus_block_pattern_categories' );