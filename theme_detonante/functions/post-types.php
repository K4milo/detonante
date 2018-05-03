<?php

// Custom post types creation
function create_posttype() {
    
    //Post Type Emprendimientos

    register_post_type( 'emprendimiento',

    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Emprendimientos' ),
                'singular_name' => __( 'Emprendimiento' )
            ),
            'rewrite' => array('slug' => 'emprendimiento'),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 3,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    //Post Type Líderes

    register_post_type( 'lideres',

    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Líderes' ),
                'singular_name' => __( 'Líder' )
            ),
            'rewrite' => array('slug' => 'lider'),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    //Post Type Historias

    register_post_type( 'historias',

    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Historias' ),
                'singular_name' => __( 'Historia' )
            ),
            'rewrite' => array('slug' => 'historia'),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        )
    );

    /////////
    // TAXONOMIES
    /////////

    $media_labels = array(
        'name' => _x( 'Tipo de Emprendimiento', 'tipo de emprendimiento' ),
        'singular_name' => _x( 'Emprendimiento', 'emprendimiento' ),
        'search_items' =>  __( 'Buscar emprendimientos' ),
        'all_items' => __( 'Todos los emprendimientos' ),
        'parent_item' => __( 'Parent Emprendimiento' ),
        'parent_item_colon' => __( 'Tipo de Emprendimiento:' ),
        'edit_item' => __( 'Editar Emprendimiento' ), 
        'update_item' => __( 'Actualizar Emprendimiento' ),
        'add_new_item' => __( 'Adicionar tipo de emprendimiento' ),
        'new_item_name' => __( 'New Type Number' ),
        'menu_name' => __( 'Tipos de Emprendimiento' ),
    ); 

    register_taxonomy('emprendimiento',array('emprendimiento'), array(
        'hierarchical' => true,
        'labels' => $media_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rest_base' => 'emprendimiento',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'emprendimiento' ),
    ));   

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );