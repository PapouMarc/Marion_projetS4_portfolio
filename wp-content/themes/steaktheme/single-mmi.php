<?php get_header(); ?>
<?php if (have_posts()): ?>

    <?php while (have_posts()):
        the_post(); ?>
        <article class="text-gris sm:mx-[2rem] md:mx-[2rem] mx-[12vw]">
            <div class="grid grid-cols-1 justify-items-center md:grid-cols-1 items-center gap-0 py-10">
                <div class="">
                    <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] "
                        src="<?php
                        echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
                    <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]"
                        src="<?php
                        echo wp_get_attachment_url(18); ?>" alt="cercle orange blur" />
                    <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[190px] sm:left-[190px] sm:top-[-70px] overflow-hidden"
                        src="<?php
                        echo wp_get_attachment_url(17); ?>" alt="cercle vert blur" />
                </div>

                <div
                    class="z-40 grid grid-cols-2 md:grid-cols-1 gap-[2rem] justify-items-center items-center pt-[50px] md:py-[2rem]">
                    <div>
                        <h1 class=" text-[4rem]  md:text-2xl sm:text-[2rem] pb-5">
                            <?php the_title(); ?>
                        </h1>
                        <h3>
                            <?php the_field('date_du_projet'); ?>
                        </h3>
                    </div>
                    <div class="">
                        <?php $term_image = get_field('photo'); ?>
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <!-- image mise en avant servant de logo -->
                    </div>
                </div>
            </div>

            <!-- //résumé article -->
            <h2 class="z-40 text-[2rem] pb-5 md:text-2xl sm:text-[2rem]">
                <?php the_field('h1_article'); ?>
            </h2>

            <div class="z-40 mb-[2rem] grid grid-cols-1 justify-items-center content-between ">

                <div class="grid grid-cols-2 md:grid-cols-1 gap-[2rem] sm:gap-[4rem]  mb-[4rem] items-start">

                    <div class="">
                        <?php the_field('p_resume'); ?>
                    </div>
                    <div class="">
                        <?php $image_id = get_field('logo_du_projet'); ?>
                        <!-- // Récupérer l'ID de l'image -->

                        <img class="w-[25rem]" src="<?php echo wp_get_attachment_url($image_id); ?>" alt="img" />

                    </div>
                </div>
            </div>


            <div class="grid justify-start mt-[2rem] sm:mt-[4rem] py-[1rem]">
                <h2>
                    <?php the_field('h2-outils_utilises'); ?>
                </h2>
            </div>

            <div class="mb-[4rem] mt-[2rem] grid grid-cols-1 gap-[2rem] justify-items-center content-between ">
                <!-- <?php the_field('logiciels'); ?> -->

                <div class="flex flex-wrap flex-row-reverse gap-[2rem] justify-center">
                    <?php
                    // Récupérer les termes associés à l'article que si cest une taxonomie
                    // $terms = get_the_terms(get_the_ID(), 'logiciels');
            
                    // if ($terms && !is_wp_error($terms)) {
                    //     foreach ($terms as $term) {
                    //         // Vérifier le nom du terme (logiciel) et afficher l'icône correspondante
                    //         if ($term->name === 'Pinterest') {
                    //             // Afficher l'icône pour Illustrator (ajustez le chemin de l'image en conséquence)
                    //             $image_url = wp_get_attachment_image_url(36, 'thumbnail');
            
                    //             echo '<img src="' . esc_url($image_url) . '" alt="Pinterest Icon">';
                    //         } elseif ($term->name === 'Figma') {
                    //             // Afficher l'icône pour Figma (ajustez le chemin de l'image en conséquence)
                    //             $image2_url = wp_get_attachment_image_url(33, 'thumbnail');
                    //             echo '<img src="' . esc_url($image2_url) . '" alt="Figma Icon">';
                    //         }
                    //         // Ajoutez d'autres conditions pour d'autres logiciels si nécessaire
                    //     }
                    // }
            

                    $logiciels = get_post_meta(get_the_ID(), 'logiciels', true);
                    
                    foreach ($logiciels as $logiciel_icon)//on passe en revu tout le contenu du tableau $logiciels
			        {   
                        //pour chaque element on determine l image à afficher
                        switch($logiciel_icon)
                        {
                            case 'Adobe Photoshop':
                                echo '<img src="' . esc_url(wp_get_attachment_image_url(84, 'thumbnail')) . '" alt="Photoshop Icon">';
                                break;
                            case 'Adobe Illustrator':
                                echo '<img class="w-[50px]" src="' . esc_url(wp_get_attachment_image_url(79, 'thumbnail')) . '" alt="Illustrator Icon">';
                                break;
                            case 'Adobe In design':
                                echo '<img src="' . esc_url(wp_get_attachment_image_url(83, 'thumbnail')) . '" alt="In Design Icon">';
                                break;
                            case 'After Effect':
                                echo '<img class="w-[50px]" src="' . esc_url(wp_get_attachment_image_url(78, 'thumbnail')) . '" alt="After Effect Icon">';
                                break;            
                            case 'Figma':
                                echo '<img src="' . esc_url(wp_get_attachment_image_url(82, 'thumbnail')) . '" alt="Figma Icon">';
                                break;
                            case 'Pinterest':
                                echo '<img class="w-[50px]" src="' . esc_url(wp_get_attachment_image_url(80, 'thumbnail')) . '" alt="Pinterest Icon">';
                                break;
                            case 'Crayon':
                                echo '<img class="w-[50px]" src="' . esc_url(wp_get_attachment_image_url(85, 'thumbnail')) . '" alt="Pinterest Icon">';
                                break;
                            default://si l element ne correspond à aucun autre on peut lui attribuer une image par defaut
                                echo '<img src="URL_LOGICIEL_INCONNU_A_COMPLETER.png" alt="'. $logiciel_icon .' Icon">';
                        }
                    }
                    ?>
                    
                </div>
            </div>

            <div class="pt-[2rem]">
                <h2>
                    <?php the_field('h2-etapes_de_creation'); ?>
                </h2>
                <h3 class="pb-5">
                    <?php the_field('h3-croquis'); ?>
                </h3>

                <div class="grid grid-cols-2 md:grid-cols-1 gap-[2rem] sm:gap-[4rem]  align-middle pb-[4rem]">
                    <div class="grid grid-cols-1 gap-[2rem] justify-items-center">
                        <?php the_field('p-h3'); ?>

                        <div class="pt-2 ">
                            <?php $image2_id = get_field('img1-h3'); ?>
                            <img class="w-[25rem]" src="<?php echo wp_get_attachment_url($image2_id); ?>" alt="img" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-[2rem] sm:gap-[4rem]  justify-items-center">
                        <?php the_field('p2-h3'); ?>
                        <div class="relative">
                            <?php $image3_id = get_field('img2-h3'); ?>
                            <img class="w-[25rem]" src="<?php echo wp_get_attachment_url($image3_id); ?>" alt="img" />
                            <img class="w-[20rem] absolute z-[-1] left-[1rem] md:top-[12rem] sm:top-[8rem] top-[15rem]"
                                src="<?php echo wp_get_attachment_url(19); ?>" alt="cercle rouge" />
                        </div>
                    </div>
                </div>

                <div class="py-[4rem]">
                    <h3 class="pb-5">
                        <?php the_field('h3-creation'); ?>
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-1 content-between gap-[2rem] sm:gap-[4rem] ">
                        <div class="grid grid-cols-1 gap-[2rem] justify-items-center">
                            <?php the_field('p-h3creation'); ?>
                            <div class="relative">
                                <?php $image4_id = get_field('img-h3creation'); ?>
                                <img class="w-[25rem]" src="<?php echo wp_get_attachment_url($image4_id); ?>" alt="img" />
                                <img class="w-[20rem] absolute z-[-1] left-[-10rem] sm:top-[5rem] top-[0rem]"
                                    src="<?php echo wp_get_attachment_url(18); ?>" alt="cercle vert" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1  justify-items-center">
                            <?php the_field('p2-h3creation'); ?>

                            <div class="socialnetwork justify-items-center">

                                <?php $reseaux = get_post_meta(get_the_ID(), 'liensreseaux', true);

                                if (in_array('Behance', $reseaux)) {
                                    $behance_link = get_field('behance');
                                    echo '<a href="' . esc_url($behance_link) . '" target="_blank" ><img class="h-[40px]" src="' . esc_url(wp_get_attachment_image_url(33, 'thumbnail')) . '" alt="Behance Icon"></a>';
                                }

                                if (in_array('Instagram', $reseaux)) {
                                    $instagram_link = get_field('instagram');
                                    echo '<a href="' . esc_url($instagram_link) . '" target="_blank" ><img class="h-[40px]" src="' . esc_url(wp_get_attachment_image_url(36, 'thumbnail')) . '" alt="Instagram Icon"></a>';
                                }

                                if (in_array('Youtube', $reseaux)) {
                                    $youtube_link = get_field('youtube');
                                    echo '<a href="' . esc_url($youtube_link) . '" target="_blank" ><img class="h-[40px]" src="' . esc_url(wp_get_attachment_image_url(81, 'thumbnail')) . '" alt="Behance Icon"></a>';
                                }
                                ?>
                                <!-- <a href="<?php the_field('behance'); ?>">Behance</a>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            </div>

        </article>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>