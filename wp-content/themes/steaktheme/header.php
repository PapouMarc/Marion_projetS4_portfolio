<!DOCTYPE html>
<html>

<head <?php language_attributes(); ?>>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php the_title(); ?>
  </title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>


<body>
  <div class="wrap z-40">
    <div class="navigation">
      <header class="grid-header mx-[4rem] sm:mx-[2rem] mt-2">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img class="lg:w-[100px] w-[150px]" src="<?php echo wp_get_attachment_url(90); ?>" alt="img" />
        </a>
<div class="sm:header-mobileul">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
            )
          );
          ?>
        </div>
      </header>



      <!-- <header class="grid-header mx-[4rem] sm:mx-[2rem] mt-2">
        <a href="<?php echo esc_url(home_url('/')); ?>">
           <img class="lg:w-[100px] w-[150px]" src="<?php echo wp_get_attachment_url(90); ?>" alt="img" /> 
        </a>

        Menu hamburger pour les écrans mobiles
        <div id="mobile-menu-toggle" class="md:hidden grid md:justify-self-end">
          <button class="text-white p-2 focus:outline-none">
            <span class="h-[2px] w-[20px] my-2 bg-gris block"></span>
            <span class="h-[2px] w-[20px] my-2 bg-gris block"></span>
            <span class="h-[2px] w-[20px] my-2 bg-gris block"></span>
          </button>
          <div id="mobile-menu" class="hidden">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'header-menu',
                'container_class' => 'flex flex-col mt-4',
              )
            );
            ?>
          </div>
        </div>

        <!-- Menu standard pour les écrans moyens et supérieurs -->
        <div id="standard-menu" class="header pt-[20px] hidden md:block">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu'
            )
          );
          ?>
        </div>

        <script>
          document.addEventListener("DOMContentLoaded", function () {
            // Sélectionnez les éléments du menu
            var mobileMenuToggle = document.getElementById("mobile-menu-toggle");
            var mobileMenu = document.getElementById("mobile-menu");
            var standardMenu = document.getElementById("standard-menu");

            // Vérifiez la largeur de l'écran lors du chargement de la page
            updateMenuDisplay();

            // Attachez un gestionnaire d'événements au redimensionnement de la fenêtre
            window.addEventListener("resize", function () {
              updateMenuDisplay();
            });

            // Fonction pour mettre à jour l'affichage du menu en fonction de la largeur de l'écran
            function updateMenuDisplay() {
              if (window.innerWidth < 768) {
                // Affichez le menu mobile et masquez le menu standard
                mobileMenuToggle.style.display = "block";
                mobileMenu.style.display = "none";
                standardMenu.style.display = "none";
              } else {
                // Masquez le menu mobile et affichez le menu standard
                mobileMenuToggle.style.display = "none";
                mobileMenu.style.display = "none";
                standardMenu.style.display = "block";
              }
            }

            // Attachez un gestionnaire d'événements au clic sur le bouton du menu mobile
            mobileMenuToggle.addEventListener("click", function () {
              // Basculez la visibilité du menu mobile lors du clic
              if (mobileMenu.style.display === "none") {
                mobileMenu.style.display = "block";
              } else {
                mobileMenu.style.display = "none";
              }
            });
          });
        </script>
      </header>
    </div>