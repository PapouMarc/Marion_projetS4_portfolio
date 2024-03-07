<?php
/*
Template Name: Contact
*/

get_header();
?>
<div class="bg-blanc-ivoir grid grid-rows-[1fr] ">
    <div class="items-center gap-0 py-10">
        <div class="z-0">
            <img class="absolute w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] "
                src="<?php
                echo wp_get_attachment_url(17); ?>" alt="cercle violet blur" />
            <img class="absolute w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]"
                src="<?php
                echo wp_get_attachment_url(16); ?>" alt="cercle orange blur" />
            <img class="absolute w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[190px] sm:left-[190px] sm:top-[-70px] overflow-hidden"
                src="<?php
                echo wp_get_attachment_url(19); ?>" alt="cercle rouge blur" />
        </div>

    </div>
    <div class="z-40 pt-[50px] mx-[15rem] pb-[8rem]">
        <p class="text-gris text-[4rem] font-Paytone md:text-2xl sm:text-[2rem] ">Besoin de me contacter ?</p>
    </div>


    <div class='sm:mx-[4vw] md:mx-[10vw] mx-[20vw] mt-10'>

        <div class='md:px-3 lg:px-14 px-32 rounded-lg  text-[25px]'>
            <form class="" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">

                <div class="font-Paytone my-4 bg-blanc-ivoir">
                    <div class="grid grid-rows-2">
                        <!-- <label for="email">Email</label> -->
                        <input type="email" id="mail" placeholder="Email" name="mail" required>
                        <span class="w-full h-[3px] bg-gris"></span>
                    </div>
                    <div class="grid grid-cols-2 gap-10 my-4">
                        <div class="grid grid-rows-2">
                            <!-- <label for="nom">Nom</label> -->
                            <input type="text" id="lastname" name="lastname" placeholder="Nom" required>
                            <span class="w-full h-[3px] bg-gris"></span>
                        </div>
                        <div class="grid grid-rows-2">
                            <!-- <label for=" prenom">Prénom</label> -->
                            <input type="text" id="surname" name="surname" placeholder="Prénom" required>
                            <span class="w-full h-[3px] bg-gris"></span>
                        </div>
                    </div>

                    <div class="grid grid-rows-2 pt-20 ">
                        <label class="font-Paytone mb-2" for="object">Sujet du message</label>
                        <input class="text-[18px] bg-blanc-ivoir" name="object" placeholder="Ici l'objet de votre message">
                        <span class="w-full h-[3px] bg-gris"></span>
                    </div>
                    <div class="grid grid-rows-2 pt-20 pb-20">
                        <label class="" for="content">Message</label>
                        <input name="content" id="content" class="text-[18px] bg-blanc-ivoir" placeholder="Pourquoi souhaitez-vous me contacter ?"></input>
                        <span class="w-full h-[3px] bg-gris"></span>
                    </div>
                    <div class=' font-body text-[16px] mt-4 mb-4'><input class='self-start mr-1' type="checkbox"
                            name="MentionLegal" value="" required><label for="MentionLegal">J'accepte que mes informations soient utilisées pour une prise de
                            contact avec vous.</label></div>
                    <input type="hidden" name="action" value="process_contact_form">
                    <?php wp_nonce_field('process_contact_form', 'contact_form_nonce'); ?>
                    <div class=" flex justify-center">
                        <input
                            class=" hover:!bg-[#FFACAC]  !text-blanc hover:!text-gris mb-7"
                            type="submit" value="ENVOYER">
                    </div>
            </form>
        </div>
    </div>
</div>