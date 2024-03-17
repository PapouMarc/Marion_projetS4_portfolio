<?php add_theme_support( 'post-thumbnails' ); ?>

<?php 
    //ajouter une nouvelle zone de menu à mon thème
    function register_my_menu(){
        register_nav_menus( array(
            'header-menu' => __( 'Menu header'),
            'footer-menu'  => __( 'Menu footer'),
        ) );
    }
    add_action( 'init', 'register_my_menu', 0 );

    

   
    function enqueue_tailwind_css() {
        // Trouve le fichier tailwind.css dans le dossier du thème
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'input', get_template_directory_uri() . '/input.css', array('style'), '1.0' );
    }
    
//fonction formulaire de contact
function process_contact_form() {
    // Vérifiez la validité du nonce
    if ( isset( $_POST['contact_form_nonce'] ) && wp_verify_nonce( $_POST['contact_form_nonce'], 'process_contact_form' ) ) {

        // Récupérez les données du formulaire
        $mail = sanitize_email( stripslashes( $_POST['mail'] ) );
        $lastname = sanitize_text_field( stripslashes( $_POST['lastname'] ) );
		$surname = sanitize_text_field( stripslashes( $_POST['surname'] ) );
		$object = sanitize_text_field( stripslashes( $_POST['object'] ) );
		$content = esc_textarea( stripslashes( $_POST['content'] ) );

        // Construisez le contenu de l'e-mail
$message="";
	  	$message .= "\nEmail: $mail\n";
        $message = "De: $lastname $surname\n";
        $message .= "\nMessage:\n$content";
	  	$message .= "\n\nMail envoyé automatiquement par le formulaire de contact du Portfolio de Marion MURA\n";
	  	$message .= "https://marionmura.fr/";

        // Utilisez la fonction de courrier WordPress pour envoyer l'e-mail
        wp_mail( 'marion.mura090@gmail.com', $object, $message );

        // Redirigez l'utilisateur après l'envoi du formulaire
        wp_redirect( home_url( '/contact/' ) );
        exit;
    } else {
        // Si le nonce n'est pas valide, faites quelque chose ici (par exemple, renvoyez une erreur).
        wp_die('Erreur de sécurité. Veuillez réessayer.');
    }
}

// Ajoutez une action pour le traitement du formulaire Contact
add_action( 'admin_post_process_contact_form', 'process_contact_form' );
add_action( 'admin_post_nopriv_process_contact_form', 'process_contact_form' );


    add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
    ?>

