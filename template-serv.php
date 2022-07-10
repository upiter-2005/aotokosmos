<?php
/**
 * Template Name: Template Service (Service)
 */
get_header(); ?>

<div class="breadcrumbs">
    <div class="container">
        <a href="/">Главная</a>
        <span>/</span>
        <span>Услуги</span>
       
    </div>
</div>

<section class="services">
    <h2>Услуги</h2>
    <div class="container-min">
        <div class="row">
            <div class="col-md-4">
                <a href="/podbor-i-pokupka-avto-iz-ssha/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s1.svg" alt="">
                    <p>Подбор и покупка авто из США</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/dostavka-avto-iz-ssha/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s2.svg" alt="">
                    <p>Доставка авто из США </p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/avtomobil-dlya-yuridicheskih-lits/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s3.svg" alt="">
                    <p>Автомобиль для юридических лиц</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/kredit-na-avto-iz-ssha/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s4.svg" alt="">
                    <p>Кредит на авто из США</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/pokupka-zapchastej-v-ssha/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s5.svg" alt="">
                    <p>Покупка запчастей в США</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/partnerstvo-opt/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s6.svg" alt="">
                    <p>Партнерство (опт)</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/bystraya-dostavka-avto-iz-ssha-cherez-evropu/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s7.svg" alt="">
                    <p>Быстрая доставка авто из США 
                        (через Европу)</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/dostavka-avto-iz-kanady/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s8.svg" alt="">
                    <p>Доставка авто из Канады</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/pomoshh-v-prodazhe-avto/" class="serv-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/s9.svg" alt="">
                    <p>Помощь в продаже авто</p>
                </a>
            </div>
        </div>
    </div>
</section>


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