<?php get_header(); ?>
<div class="grid grid-cols-1 justify-items-center md:grid-cols-1 items-center gap-0 py-10 sm:mx-[2rem] md:mx-[2rem] mx-[12vw]">
    <div class="">
        <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] " src="<?php echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
        <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]" src="<?php echo wp_get_attachment_url(18); ?>" alt="cercle vert blur" />
        <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[190px] sm:left-[190px] sm:top-[-70px] overflow-hidden" src="<?php echo wp_get_attachment_url(17); ?>" alt="cercle jaune blur" />
    </div>
    <div class="z-40 flex flex-row-reverse md:grid md:grid-cols-1 gap-[5rem] justify-items-center items-center pt-[50px] md:py-[2rem]">
        <a href="https://www.behance.net/kiwwii_kawaii" target="_blank">
            <img class="md:w-[185px] shadowbulle" src="<?php echo wp_get_attachment_url(93); ?>" alt="icone behance" /></a>
        <div>
            <p class="text-gris text-[2rem] font-Paytone md:text-[22px] sm:text-[1rem] z-40">Aspirante graphiste voici
                mes meilleurs travaux réalisés lors de mon BUT MMI</p>
        </div>
    </div>
</div>


<!-- <div class="grid grid-cols-3 md:grid-cols-1 sm:grid-cols-1 border border-gray-300 gap-0 m-0 p-0">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <article class="border border-gray-300">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?> </a> -->
                <!-- <div class="">
                    <h3 class="title">
                        
                            <?php the_title(); ?>
                    </h3>
                    <p class="description">voir le projet</p>
                    

                </div> -->
            <!-- </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div> -->

<?php define('WP_DEBUG', true); // permet de forcer le debugage de la page en cas d'erreur
echo 'Page de debug<br/><br/>';

//Pour afficher la liste des catégores en format html
$args_cat = array(
    'echo'                => 0,
    'style'               => '', //mettre liste à la place de '' pour avoir un formatage ul
    'taxonomy'            => 'articlemmi',
);
$list_cats = wp_list_categories($args = $args_cat);
echo '<hr> list by wp_list_categories<br/>';
print_r($list_cats);

// marche trouve bien les différentes catégories 

$cat_slug = 'animation';
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


// $cat_slug = 'animation';
// $cat_detail = get_category_by_slug( $cat_slug );
// echo '<hr> list by get_category_by_slug<br/>';
// print_r($cat_detail );
// echo '<br/>';
// $args = array (
//     'showposts' => '20',
//     'cat' => $cat_detail->term_id
// );
// $the_query = new WP_Query( $args );
// echo '<hr><br/>Nombre de post:';
// print_r($the_query->have_posts());
// echo '<br/>';
// if ( $the_query->have_posts() ){
//     while ( $the_query->have_posts() ){
//         $the_query->the_post();
//         the_title();
//         echo '<br/>';
//         the_permalink();
//         echo '<br/>';
//         the_content();
//    }
// }

wp_reset_postdata();

get_footer(); ?>