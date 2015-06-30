
<?php

add_filter('wpcf_pr_belongs_item', 'my_wpcf_pr_belongs_item', 10, 2 );

function my_wpcf_pr_belongs_item($item, $parent_type)
{
    if ( 'page' == $parent_type ) {
        $item['#title'] .= sprintf(' (ID: %d)', $item['#value']);
    }

    return $item;
}
