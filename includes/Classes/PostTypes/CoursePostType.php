<?php

namespace SatowerAcademy\Classes\PostTypes;

class CoursePostType
{
    public static function init()
    {
        add_action(
            'init',
            [__CLASS__, 'registerCustomPostType']
        );
    }

    public static function registerCustomPostType()
    {
        $labels = [
            'name'                  => __('Courses', 'satower-academy'),
            'singular_name'         => __('Course', 'satower-academy'),
            'menu_name'             => __('Courses', 'satower-academy'),
            'name_admin_bar'        => __('Course', 'satower-academy'),
            'add_new'               => __('Add New', 'satower-academy'),
            'add_new_item'          => __('Add New Course', 'satower-academy'),
            'new_item'              => __('New Course', 'satower-academy'),
            'edit_item'             => __('Edit Course', 'satower-academy'),
            'view_item'             => __('View Course', 'satower-academy'),
            'all_items'             => __('All Courses', 'satower-academy'),
            'search_items'          => __('Search Courses', 'satower-academy'),
            'parent_item_colon'     => __('Parent Courses:', 'satower-academy'),
            'not_found'             => __('No courses found.', 'satower-academy'),
            'not_found_in_trash'    => __('No courses found in Trash.', 'satower-academy'),
        ];

        $args = [
            'labels'                => $labels,
            'supports'              => ['title', 'editor', 'author', 'comments', 'thumbnail'],
            'public'                => true,
            'show_ui'               => false,
            'show_in_menu'          => false,
            'show_in_admin_bar'     => false,
            'show_in_nav_menus'     => false,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'rewrite'               => ['slug' => 'courses'],
            'capability_type'       => 'post',
        ];

        register_post_type('course', $args);
    }
}
