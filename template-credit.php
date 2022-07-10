<?php
/**
 * Template Name: Template Credit (Credit)
 */
get_header(); ?>


<section class="short-fon">
		
        <p class="title">Получить консультацию</p>
        <form action="" class="short-form"> 
            
                    <p class="short-form-p w20">
                        <label for="shot-name">Имя</label>
                        <input type="text" id="shot-name" name="name" >
                    </p>
                
                
                    <p class="short-form-p w20">
                        <label for="short-tel">Номер телефона</label>
                        <input type="tel" name="short-tel" >
                    </p>
                
                
                    <p class="short-form-p w40">
                        <label for="short-mes">Вопрос</label>
                        <textarea name="short-mes"></textarea>
                    </p>
                    <p class="short-form-p w20"><button type="submit" class="accent-but">Отправить</button></p>
                
                    
                
        </form>

</section>

<section class="info">
    <h2>Наши банки-партнеры</h2>
    <div class="container-min">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/credit1.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/credit2.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/credit3.png" alt="" class="img-responsive">
            </div>

          
        </div>

        <h2 class="pt70">Lorem ipsum dolor sit amet</h2>
        <div class="row">
            <div class="col-md-6">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis aspernatur unde necessitatibus, fuga eveniet illum magnam incidunt esse velit praesentium distinctio consequuntur cumque quia nam sequi est alias officia!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis aspernatur unde necessitatibus, fuga eveniet illum magnam incidunt esse velit praesentium distinctio consequuntur cumque quia nam sequi est alias officia!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis aspernatur unde necessitatibus, fuga eveniet illum magnam incidunt esse velit praesentium distinctio consequuntur cumque quia nam sequi est alias officia!
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis aspernatur unde necessitatibus, fuga eveniet illum magnam incidunt esse velit praesentium distinctio consequuntur cumque quia nam sequi est alias officia!    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis aspernatur unde necessitatibus, fuga eveniet illum magnam incidunt esse velit praesentium distinctio consequuntur cumque quia nam sequi est alias officia!
                </p>
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