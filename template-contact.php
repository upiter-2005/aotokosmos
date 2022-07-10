<?php
/**
 * Template Name: Template Contact (Contact)
 */
get_header(); ?>

<section class="contact-fon">
    <h1>КОНТАКТЫ</h1>
    <div class="contacts-sq">
        <div class="contacts-sq-item">
             <img src="<?php echo get_template_directory_uri(); ?>/img/cont-1.svg" alt="">
             <span>Телефон</span>
             <a href="tel:+380501974899" >+38 (050) 197 48 99</a>
			<a href="tel:+380685414814" >+38 (068) 541 48 14</a>
        </div>
        <div class="contacts-sq-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cont-2.svg" alt="">
            <span>Адрес</span>
            <p>Киев, ул. Нижний вал 19/21</p>
       </div>
        <div class="contacts-sq-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cont-3.svg" alt="">
            <span>Электронная почта</span>
            <a href="mailto:info@auto.kosmos@gmail.com">autokosmosinfo@gmail.com</a>
       </div>
    </div>
    <!-- <p class="remarka d-none d-md-block">
        С какими-то  ориентирами, возможно которые в два слова могут объяснить местному, точный адрес, образно - Бессарабка, возле Цитруса, через дорогу от Рошена если две сплошные, нет перехода, то указать как подъезжать
    </p> -->
</section>
<!-- <p class="mob-remarka d-block d-md-none">
    С какими-то  ориентирами, возможно которые в два слова могут объяснить местному, точный адрес, образно - Бессарабка, возле Цитруса, через дорогу от Рошена если две сплошные, нет перехода, то указать как подъезжать
</p> -->
<div id="map"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.8896324278785!2d30.508745093396435!3d50.46570886296183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce6b0f1c2fbd%3A0xe9bccb9c720f600c!2z0YPQuy4g0J3QuNC20L3QuNC5INCS0LDQuywgMTkvMjEsINCa0LjQtdCyLCDQo9C60YDQsNC40L3QsCwgMDIwMDA!5e0!3m2!1sru!2sde!4v1611008854116!5m2!1sru!2sde" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<section class="main-cats">
    <div class="container-max">
        <div class="main-cats-wrap">

            <a href="/common_types/avto-do-10-000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x1.jpg')">авто до 10 000$</a>
            <a href="/elektrokary/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x2.jpg')">Электрокары </a>
            <a href="/common_types/avto-do-15-000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x3.jpg')">авто до 15 000$</a>
            <a href="/avto-v-ukraine/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x4.jpg')">Авто в Украине</a>
            <a href="/common_types/avto-do-8000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x5.jpg')">авто до 8 000$</a>
            <a href="/maslkary/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x1.jpg')">Маслкары </a>

        </div>
    </div>
</section>


<?php get_footer(); ?>