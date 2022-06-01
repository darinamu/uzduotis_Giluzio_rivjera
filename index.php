<?php
get_header();
?>

<body>
    <main>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo_1.svg" alt="Logo" />
        </div>
        <div class="main-info">
            <p class="title">butai prie gilužio ežero kranto</p>
            <p class="sub-title">Registruokitės ir sužinokite pirmieji apie naujus butus</p>
            <svg role="button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="203px" height="69px">
                <a id="start-fancybox" data-fancybox data-src="#hidden-content">
                    <path fill-rule="evenodd" fill="rgb(221, 202, 176)"
                        d="M34.499,0.0 L168.499,0.0 C187.553,0.0 202.999,15.446 202.999,34.499 C202.999,53.553 187.553,68.999 168.499,68.999 L34.499,68.999 C15.446,68.999 0.0,53.553 0.0,34.499 C0.0,15.446 15.446,0.0 34.499,0.0 Z" />
                    <text class="button-text" x="50%" y="50%" dominant-baseline="middle" text-anchor="middle">SUŽINOTI
                        DAUGIAU</text>
                </a>
            </svg>
        </div>

        <div style="display:none;" id="hidden-content">
            <div class="logo2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo_2.svg" alt="Logo" />
            </div>
            <p class="modal-title">Užsiregistruokite ir jums pirmiesiems papasakosime apie<span
                    class="modal-title-name">„Gilužio Rivjerą“</span></p>
            
            <?php echo apply_shortcodes( '[contact-form-7 id="11" title="Registracija"]' ); ?>

            <div class="wave">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/wave.svg" alt="Logo" />
            </div>
            <p class="person-name">Jurgita Kveselaitė <span class="person-position">Pardavimų vadovė</span></p>
            <div class="contacts">
                <div class="phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt="Phone logo" />
                    <a href="tel:+37065994202" class="phone-number">+370 659 94202</a>
                </div>
                <div class="email">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mail.svg" alt="E-mail logo" />
                    <a href="mailto:pardavimai@giluziorivjera.lt" class="email-address">pardavimai@giluziorivjera.lt</a>
                </div>
            </div>
        </div>
    </main>
</body>

<?php get_footer(); ?>