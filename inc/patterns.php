<?php

/**
 * Adds new Block Pattern to the block pattern category Quiritibus named Quiritibus - Advanced Tabs.
 * 
 * Uses the in-built function of WordPress called register_block_pattern to add
 * Quiritibus - Advanced Tabs as a new block pattern. It takes two parameters:
 * the first one requires namespace/title, the second is an array defining the
 * properties of the block pattern. In this case, it defines the title, which 
 * itself takes a string that gets displayed in Gutenberg. The second one is a
 * description, also displayed in the post editor. The third one is the contents,
 * which is pasted from Gutenberg's code editor itself, but first escaping the
 * text externally. The fourth one defines the category to be Quiritibus,
 * registered in inc/categories.php
 * 
 * @since 1.0.0
 */
function quiritibus_block_patterns() {

    register_block_pattern(
        'quiritibus-plugin/quiritibus-advanced-tabs',
        array(
            'title'         => __( 'Quiritibus - Advanced Tabs', 'quiritibus-plugin' ),

            'description'   => _x( 'It presets the four ortography tabs', 'quiritibus-block-patterns' ),
            
            'content'       => "<!-- wp:advgb/adv-tabs {\"tabHeaders\":[\"Antiqua manu\",\"Italica manu\",\"Nova manu\",\"Acadēmicā manū\"],\"tabActive\":3,\"headerTextColor\":\"#000000\",\"borderWidth\":0,\"borderRadius\":0,\"pid\":\"advgb-tabs-0b7824f1-6188-442f-951a-fd59dc72766d\",\"activeTabBgColor\":\"#ffffff\",\"activeTabTextColor\":\"#000000\",\"changed\":true,\"uniqueID\":\"_7824f1-61\"} -->\n<div class=\"wp-block-advgb-adv-tabs advgb-tabs-wrapper advgb-tab-horz-desktop advgb-tab-vert-tablet advgb-tab-stack-mobile advgb-tabs-0b7824f1-6188-442f-951a-fd59dc72766d\" data-tab-active=\"0\"><ul class=\"advgb-tabs-panel\"><li class=\"advgb-tab\" style=\"background-color:#e0e0e0;border-style:solid;border-width:0px;border-radius:0px\"><a href=\"#advgb-tabs-tab0\" style=\"color:#000000\"><span>Antiqua manu</span></a></li><li class=\"advgb-tab\" style=\"background-color:#e0e0e0;border-style:solid;border-width:0px;border-radius:0px\"><a href=\"#advgb-tabs-tab1\" style=\"color:#000000\"><span>Italica manu</span></a></li><li class=\"advgb-tab\" style=\"background-color:#e0e0e0;border-style:solid;border-width:0px;border-radius:0px\"><a href=\"#advgb-tabs-tab2\" style=\"color:#000000\"><span>Nova manu</span></a></li><li class=\"advgb-tab\" style=\"background-color:#e0e0e0;border-style:solid;border-width:0px;border-radius:0px\"><a href=\"#advgb-tabs-tab3\" style=\"color:#000000\"><span>Acadēmicā manū</span></a></li></ul><div class=\"advgb-tab-body-wrapper\" style=\"border-style:solid;border-width:0px;border-radius:0px\"><!-- wp:advgb/tab {\"pid\":\"advgb-tabs-0b7824f1-6188-442f-951a-fd59dc72766d\",\"header\":\"Antiqua manu\",\"tabActive\":3,\"changed\":true,\"tabHeaders\":[\"Antiqua manu\",\"Italica manu\",\"Nova manu\",\"Acadēmicā manū\"],\"uniqueID\":\"_d138e7-fd\"} -->\n<div class=\"wp-block-advgb-tab advgb-tab-body-container\"><div class=\"advgb-tab-body-header\">Antiqua manu</div><div class=\"advgb-tab-_d138e7-fd advgb-tab-body\" aria-labelledby=\"advgb-tabs-tab0\"><!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:advgb/tab -->\n\n<!-- wp:advgb/tab {\"id\":1,\"pid\":\"advgb-tabs-0b7824f1-6188-442f-951a-fd59dc72766d\",\"header\":\"Italica manu\",\"tabActive\":3,\"changed\":true,\"tabHeaders\":[\"Antiqua manu\",\"Italica manu\",\"Nova manu\",\"Acadēmicā manū\"],\"uniqueID\":\"_6ab55b-55\"} -->\n<div class=\"wp-block-advgb-tab advgb-tab-body-container\"><div class=\"advgb-tab-body-header\">Italica manu</div><div class=\"advgb-tab-_6ab55b-55 advgb-tab-body\" aria-labelledby=\"advgb-tabs-tab1\"><!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:advgb/tab -->\n\n<!-- wp:advgb/tab {\"id\":2,\"pid\":\"advgb-tabs-0b7824f1-6188-442f-951a-fd59dc72766d\",\"header\":\"Nova manu\",\"tabActive\":3,\"changed\":true,\"tabHeaders\":[\"Antiqua manu\",\"Italica manu\",\"Nova manu\",\"Acadēmicā manū\"],\"uniqueID\":\"_5b5c23-56\"} -->\n<div class=\"wp-block-advgb-tab advgb-tab-body-container\"><div class=\"advgb-tab-body-header\">Nova manu</div><div class=\"advgb-tab-_5b5c23-56 advgb-tab-body\" aria-labelledby=\"advgb-tabs-tab2\"><!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:advgb/tab -->\n\n<!-- wp:advgb/tab {\"id\":3,\"pid\":\"advgb-tabs-0b7824f1-6188-442f-951a-fd59dc72766d\",\"header\":\"Acadēmicā manū\",\"tabActive\":3,\"changed\":true,\"tabHeaders\":[\"Antiqua manu\",\"Italica manu\",\"Nova manu\",\"Acadēmicā manū\"],\"uniqueID\":\"_a3cc54-b1\"} -->\n<div class=\"wp-block-advgb-tab advgb-tab-body-container\"><div class=\"advgb-tab-body-header\">Acadēmicā manū</div><div class=\"advgb-tab-_a3cc54-b1 advgb-tab-body\" aria-labelledby=\"advgb-tabs-tab3\"><!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:advgb/tab --></div></div>\n<!-- /wp:advgb/adv-tabs -->",

            'categories'    => array( 'quiritibus' ),
        )
    );

}

add_action( 'init', 'quiritibus_block_patterns' );