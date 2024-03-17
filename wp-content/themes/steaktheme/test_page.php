<?php
    /*
    Template Name: test_page
    */
    define( 'WP_DEBUG', true ); // permet de forcer le debugage de la page en cas d'erreur


    /**
     * Retrieves a category object by category slug.
     *
     * @since 2.3.0
     *
     * @param string $slug The category slug.
     * @return object|false Category data object on success, false if not found.
     */
    function get_category_by_slug_marion( $slug ,$cat_term='category') {
        $category = get_term_by( 'slug', $slug, $cat_term );

        if ( $category ) {
            _make_cat_compat( $category );
        }

        return $category;
    }


     echo 'Page de debug<br/><br/>';

     //Pour afficher la liste des catégores en format html
    $args_cat = array(
		'echo'                => 0,
		'style'               => '', //mettre liste à la place de '' pour avoir un formatage ul
		'taxonomy'            => 'category',
	);     
    $list_cats = wp_list_categories( $args = $args_cat );
    echo '<hr> list by wp_list_categories<br/>';
    print_r($list_cats);


    /*
    Pour recupérer la data brute à partir du nom, permet de recupérer aussi les sous-cats

    */
    $cat_name = 'Cours';
    $terms = array(
        'name' => $cat_name, //pour trier par nom
        'taxonomy' => 'category'
    );
    $cat_detail = get_categories( $args = $terms );
    echo '<hr> list by get_categories<br/>';
    print_r($cat_detail[0] );
    echo '<br/>';
    //trap l id
    echo 'Id categorie '. $cat_slug .':';
    print_r($cat_detail[0]->term_id);
    echo '<br/>';
    //trap la description
    echo 'Description categorie '. $cat_slug .':';
    print_r($cat_detail[0]->description);
    echo '<br/>';



    /*Pour recupérer la data brute de la table taxonomy en fonction de la description
    https://developer.wordpress.org/reference/functions/get_terms/
    */
    $cat_description = 'Programme';
    $terms = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC',
        'description__like' => $cat_description // pour trier par description
        //'name' => $cat_name //pour trier par nom
        //'slug' => $cat_slug //pour trier par slug
    ) );
    echo '<hr> list by terms<br/>';
    print_r($terms );
    echo '<br/>';
    //trap l id
    echo 'Id categorie '. $cat_description .':';
    print_r($terms[0]->term_id);
    echo '<br/>';
    //trap la description
    echo 'Description categorie '. $cat_description .':';
    print_r($terms[0]->description);
    echo '<br/>';


    /*Pour recupérer la data brute de la table taxonomy en fonction du slug
    A partir de fonction interne wordpress
    */
    $cat_slug = 'cryptomonnaie';
    $cat_detail = get_category_by_slug( $cat_slug );
    echo '<hr> list by get_category_by_slug<br/>';
    print_r($cat_detail );
    echo '<br/>';
    //trap l id
    echo 'Id categorie '. $cat_slug .':';
    print_r($cat_detail->term_id);
    echo '<br/>';
    //trap la description
    echo 'Description categorie '. $cat_slug .':';
    print_r($cat_detail->description);
    echo '<br/>';




    /*
    lister un post spécifique à une categorie
    https://developer.wordpress.org/reference/classes/wp_query/#Category_Parameters
    */
    
    $cat_slug = 'physique-chimie';
    $cat_detail = get_category_by_slug_marion( $cat_slug,'articlemmi' );
    echo '<hr> list by get_category_by_slug<br/>';
    print_r($cat_detail );
    echo '<br/>';
    $args = array (
        'showposts' => '20',
        'cat' => $cat_detail->term_id
    );
    $the_query = new WP_Query( $args );
    echo '<hr><br/>Nombre de post:';
    print_r($the_query->have_posts());
    echo '<br/>';
    if ( $the_query->have_posts() ){
        while ( $the_query->have_posts() ){
            $the_query->the_post();
            the_title();
            echo '<br/>';
            the_permalink();
            echo '<br/>';
            the_content();
       }
    }
    wp_reset_postdata();
?>