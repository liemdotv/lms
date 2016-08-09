<?php
add_filter('pre_get_posts','lay_custom_post_type');
function lay_custom_post_type($query) {
    if (is_home() && $query->is_main_query ())
        $query->set ('post_type', array ('post','sanpham'));
    return $query;
}