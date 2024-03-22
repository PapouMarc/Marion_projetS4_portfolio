<?php
get_header(); ?>


<div class="">

    <div class="grid grid-cols-1 justify-items-center md:grid-cols-1 items-center gap-0 py-10 sm:mx-[2rem] md:mx-[2rem] mx-[12vw]">
        <div class="">
            <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] " src="<?php
                                                                                                                                            echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
            <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]" src="<?php
                                                                                                                                                                    echo wp_get_attachment_url(17); ?>" alt="cercle orange blur" />
            <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[190px] sm:left-[190px] sm:top-[-70px] overflow-hidden" src="<?php
                                                                                                                                                                    echo wp_get_attachment_url(18); ?>" alt="cercle vert blur" />
        </div>
        <div class="z-40 grid grid-cols-2 md:grid-cols-1 gap-[2rem] justify-items-center items-center pt-[50px] md:py-[2rem]">

            <img class="right-0 flex flex-end" src="<?php
                                                    echo wp_get_attachment_url(73); ?>" alt="banniere" />
            <div>
                <p class="home-h3  text-[2rem] md:text-[1.5rem] sm:text-[1rem]">Je suis Marion , graphiste et web
                    designeuse
                </p>
                <p class="text-gris text-[4rem] font-Paytone md:text-2xl sm:text-[2rem] z-40">Marion MURA</p>
            </div>
        </div>
    </div>

    <div class=" w-[100%]">
        <div class="arrow-down">
            <img class="" src="<?php echo wp_get_attachment_url(28); ?>" alt="double arrow" />
        </div>
    </div>


    <div class="mx-4 pt-[8rem]">
        <div class="grid justify-items-start mx-[4rem] md:mx-[2rem] sm:mx[1rem]">
            <div class="grid grid-cols-2 gap-[12rem] items-baseline sm:justify-items-center">
                <h1 class="text-[5rem] md:text-[3rem] justify-self-start">Design</h1>
                <p class="justify-self-end">voir plus</p>
            </div>
            <span class="block justify-items-center w-full h-[2px] bg-gris"></span>
        </div>

        <div class="grid justify-items-start mx-[4rem] md:mx-[2rem] sm:mx[1rem]">
            <h1 class="text-[5rem] grid  text-transparent strokehomepage-motiondesign md:text-[3rem]">Motion design</h1>
            <span class="block justify-items-center w-full h-[2px] bg-gris"></span>
        </div>

        <div class="grid justify-items-start mx-[4rem] md:mx-[2rem] sm:mx[1rem]">
            <h1 class="text-[5rem] grid text-transparent strokehomepage-webdesign md:text-[3rem]">Web design</h1>
            <span class="block justify-items-center w-full  h-[2px] bg-gris"></span>
        </div>

        <div class="grid justify-items-start mx-[4rem] md:mx-[2rem] sm:mx[1rem]">
            <h1 class="text-[5rem] grid text-transparent strokehomepage-graphisme md:text-[3rem]">Graphisme</h1>
            <span class="block justify-items-center w-full h-[2px] bg-gris"></span>
        </div>


        <div class="grid grid-cols-3 gap-2 m-2 md:grid md:grid-cols-1 my-[6rem]">
            <?php 
            $cat_taxonomie = 'articlemmi';
            $args = array(
                'showposts' => '3',
                'tax_query' => array(
                    array(
                        'taxonomy' => $cat_taxonomie,
                        'field'    => 'slug',
                        'terms'    => array('animation','design')

                    )
                ),
            );
            $the_query = new WP_query($args);

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    echo '<a href="' . get_permalink() . '">';
                    the_post_thumbnail('large');
                    echo '</a>';
                }
            }
            wp_reset_postdata();
            ?>
        </div>


        <div class="grid justify-items-start mx-[4rem] md:mx-[2rem] sm:mx[1rem]">
            <div class="grid grid-cols-2 gap-[12rem] items-baseline sm:justify-items-center">
                <h1 class="text-[5rem] md:text-[3rem] justify-self-start">Dessin</h1>
                <p class="justify-self-end">voir plus</p>
            </div>
            <span class="block justify-items-center w-full h-[2px] bg-gris"></span>
        </div>

        <div class="grid grid-cols-3 gap-2 m-2 md:grid md:grid-cols-1 my-[6rem]">
            <?php 
            $cat_taxonomie = 'perso';
            $args = array(
                'showposts' => '3',
                'tax_query' => array(
                    array(
                        'taxonomy' => $cat_taxonomie,
                        'field'    => 'slug',
                        'terms'    => array('')

                    )
                ),
            );
            $the_query = new WP_query($args);

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    echo '<a href="' . get_permalink() . '">';
                    the_post_thumbnail('large');
                    echo '</a>';
                }
            }
            wp_reset_postdata();
            ?>
        </div>

        <!-- ancienne mise en page  
        <div
            class="flex flex-cols-2 justify-center gap-[5rem] md:grid md:grid-cols-1 md:gap-[1rem] mx-[5rem] lg:mx-[2rem] pb-[10rem] md:pb-[5rem]">
            <div class="w-[36rem] h-[25rem] md:w-[18rem] md:h-[15rem] bg-gris  rounded-lg"> </div>
            <div>
                <div class="md:w-[18rem] md:h-[15rem] lg:w-0 lg:h-0 bg-gris rounded-lg md:mb-[2rem]"></div>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Animation & </p>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40"> Motion Design</p>
                <div class="w-[36rem] h-[21rem] md:w-0 md:h-0 bg-gris my-12 rounded-lg">
                </div>
            </div>
        </div>

        <div
            class="flex flex-cols-2 justify-center gap-[5rem] md:grid md:grid-cols-1 md:gap-[1rem] mx-[5rem] lg:mx-[2rem] pb-[10rem] md:pb-[5rem] ">
            <div>
                <div
                    class="w-[36rem] h-[21rem] lg:w-[20rem] lg:h-[20rem] md:w-[18rem] md:h-[15rem] bg-gris  rounded-lg mb-16 md:mb-[1rem]">
                </div>
                <div class="md:w-[18rem] md:h-[24rem] w-0 h-0 bg-gris rounded-lg md:mb-[2rem]">
                </div>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Affiches, </p>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Avatars & </p>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Pictogrammes</p>

            </div>
            <div class="w-[36rem] h-[50rem] lg:w-[20rem] lg:h-[30rem] md:w-0 md:h-0 bg-gris rounded-lg mb-12">
            </div>

        </div>

        <div
            class="flex flex-cols-2 justify-center gap-[5rem] md:grid md:grid-cols-1 md:gap-[1rem] mx-[5rem] lg:mx-[2rem] pb-12 sm:pb-[5rem] ">
            <div>
                <div
                    class="w-[30rem] h-[20rem] lg:w-[20rem] lg:h-[20rem] md:w-[18rem] md:h-[15rem] bg-gris  rounded-lg mb-16 md:mb-[1rem]">
                </div>
                <div
                    class="w-[30rem] h-[20rem] lg:w-[20rem] lg:h-[20rem] md:w-[18rem] md:h-[15rem] bg-gris  rounded-lg mb-16 md:mb-[0]">
                </div>
            </div>
            <div>
                <div class="w-[30rem] h-[23rem] lg:w-[20rem] lg:h-[20rem] md:w-0 md:h-0 bg-gris rounded-lg mb-6">
                </div>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Chartes </p>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Graphiques</p>
            </div>
        </div>
    </div>

    <div class=" flex justify-center pb-[10rem] gap-5">
        <p class="text-[2rem] font-Paytone text-gris md:text-[20px]  ">PROJETS MMI</p>
        <img class="rotate-[-90deg] w-[30px]" src="<?php
                                                    echo wp_get_attachment_url(28); ?>" alt="double arrow" />
    </div>

    <div
        class="flex flex-cols-3 md:flex md:flex-row-2 md:flex-wrap sm:grid sm:grid-cols-1 justify-items-center gap-[5rem] md:gap-[1rem]  justify-center sm:mb-0">
        <div
            class="w-[18rem] h-[35rem] md:w-[10rem] md:h-[20rem] sm:w-[15rem] sm:h-[15rem] bg-gris rounded-lg lg:mb-16 sm:mb-0">
        </div>
        <div
            class="w-[25rem] h-[35rem] md:w-[12rem] md:h-[20rem] sm:w-[15rem] sm:h-[15rem] bg-gris  rounded-lg lg:mb-16 sm:mb-0">
        </div>
        <div class="place-items-center w-[23rem] md:w-[20rem]">
            <p class="text-gris font-Paytone text-2xl md:text-[28px]">Je suis Artiste,</p>
            <p class="text-gris font-Paytone text-[26px] md:text-[20px]">pendant mon temps libre. Je dessine sur Krita
                et tablette graphique.</p>
            <p class="text-gris font-Paytone text-[26px] md:text-[20px]">J’ai réalisé plusieurs projets comme une BD ou
                de l’animation 2D.</p>
            <div class=" flex justify-center mt-[3rem] gap-5">
                <p class="text-[25px] font-Paytone text-gris md:text-[20px]">MES PROJETS</p>
                <img class="rotate-[-90deg] w-[30px]" src="<?php
                                                            echo wp_get_attachment_url(28); ?>" alt="double arrow" />
            </div>
        </div> -->
    </div>

    <div class="bg-blanc-ivoir pb-10"></div>

</div>

<?php
get_footer();
?>