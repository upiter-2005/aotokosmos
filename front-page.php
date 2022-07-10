<?php get_header(); ?>


<div class="baner">
		<div class="baner-top">
			<div class="baner-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/baner-logo.svg" alt=""></div>
			<h1>АВТОМОБИЛИ ИЗ США в Украине </h1>
			<p>в наличии и под заказ</p>
		</div>
		<div class="baner-bottom">
			<p>Заказать быструю подборку автомобиля</p>
			<form class="form-ajax">
				<div class="row">
					<div class="col-md-3">
						<p class="input-p">
							<label for="tel-1">Телефон</label>
							<input type="tel" id="tel-1" name="tel" placeholder="Ваш телефон" required>
						</p>
					</div>
					<div class="col-md-3">
						<p class="input-p">
							<label for="model-1">Марка авто</label>
							<select name="brand" class="brand-find">
                        <?php
                    
                    $categories = get_terms('category', 'orderby=name&hide_empty=0&parent=0&exclude=1&hierarchical=0');

                    if($categories){
                        foreach ($categories as $cat){
                            echo '<option value='. $cat->name .'>'; ?>
                            <?php echo $cat->name; ?>
                            <?php
                            echo '</option>';
                        }
                    }

                     ?>
						</select>
						</p>
					</div>
					<div class="col-md-2">
						<p class="input-p">
							<label for="cost-from">Бюджет от</label>
							<select name="cost-from">
								<option value="7000">7 000$</option>
								<option value="8000">8 000$</option>
								<option value="9000">9 000$</option>
								<option value="10000">10 000$</option>
								<option value="11000">11 000$</option>
								<option value="12000">12 000$</option>
								<option value="13000">13 000$</option>
								<option value="14000">14 000$</option>
								<option value="15000">15 000$</option>
								<option value="16000">16 000$</option>
								<option value="17000">17 000$</option>
								<option value="18000">18 000$</option>
								<option value="19000">19 000$</option>
								<option value="20000">20 000$</option>
								<option value="20000">20 000$</option>
								<option value="21000">21 000$</option>
								<option value="22000">22 000$</option>
								<option value="23000">23 000$</option>
								<option value="24000">24 000$</option>
								<option value="25000">25 000$ </option>
							</select
						</p>
					</div>
					<div class="col-md-2">
						<p class="input-p">
							<label for="cost-to">Бюджет до</label>
							<select name="cost-to">
								<option value="8000">8 000$</option>
								<option value="9000">9 000$</option>
								<option value="10000">10 000$</option>
								<option value="11000">11 000$</option>
								<option value="12000">12 000$</option>
								<option value="13000">13 000$</option>
								<option value="14000">14 000$</option>
								<option value="15000">15 000$</option>
								<option value="16000">16 000$</option>
								<option value="17000">17 000$</option>
								<option value="18000">18 000$</option>
								<option value="19000">19 000$</option>
								<option value="20000">20 000$</option>
								<option value="20000">20 000$</option>
								<option value="21000">21 000$</option>
								<option value="22000">22 000$</option>
								<option value="23000">23 000$</option>
								<option value="24000">24 000$</option>
								<option value="25000">25 000$ +</option>
							</select>
						</p>
					</div>
					<div class="col-md-2 center">
						<button type="submit" class="accent-but">Заказать</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<section class="main-cats">
		<div class="container-max">
		<div class="main-cats-wrap">

<a href="/avto-do-10-000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x1.jpg')">авто до 10 000$</a>
<a href="/elektrokary/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x2.jpg')">Электрокары </a>
<a href="/avto-do-15-000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x3.jpg')">авто до 15 000$</a>
<a href="/avto-v-ukraine/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x4.jpg')">Авто в Украине</a>
<a href="/avto-do-8000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x5.jpg')">авто до 8 000$</a>
<a href="/maslkary/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x1.jpg')">Маслкары </a>

</div>
		</div>
	</section>


	<section class="steps">
		<h2>Этапы покупки с нами</h2>
		<div class="container-min">
			<div class="flex-block">
				<div class="block-198">
					<div class="block-img"><img src="<?php echo get_template_directory_uri(); ?>/img/st1.svg" alt="autocosmos"></div>
					<div class="block-198-wrap">
						<p>1й шаг</p>
						<span>Под ваши требования собираются предложения по аукционам.</span>
					</div>

				</div>
				<div class="block-198">
					<div class="block-img"><img src="<?php echo get_template_directory_uri(); ?>/img/st2.svg" alt="autocosmos"></div>
					<div class="block-198-wrap">
						<p>2й шаг</p>
						<span>Прозрачный просчет каждого этапа до получения готового автомобиля.</span>
					</div>

				</div>
				<div class="block-198">
					<div class="block-img"><img src="<?php echo get_template_directory_uri(); ?>/img/st3.svg" alt="autocosmos"></div>
					<div class="block-198-wrap">
						<p>3й шаг</p>
						<span>Заключение договора.</span>
					</div>

				</div>
				<div class="block-198">
					<div class="block-img"><img src="<?php echo get_template_directory_uri(); ?>/img/st4.svg" alt="autocosmos"></div>
					<div class="block-198-wrap">
						<p>4й шаг</p>
					<span>Проверка и покупка автомобиля на аукционе.</span>
					</div>
					
				</div>
				<div class="block-198">
					<div class="block-img"><img src="<?php echo get_template_directory_uri(); ?>/img/st5.svg" alt="autocosmos"></div>
					<div class="block-198-wrap">
						<p>5й шаг</p>
					<span>Доставка в Украину, ремонт,постановка авто на номера.</span>
					</div>
					
				</div>
			</div>
		</div>
    </section>
    

    <section class="showcase">
		<h2 class="accent">Авто из Сша на аукционе</h2>
		
		<div class="container-max">
			<div class="row">

            <?php 
$args = array( 'posts_per_page' => 8, 
'post_type' => 'post',
 );
?>
<?php if ( have_posts() ) : query_posts($args);
while (have_posts()) : the_post(); ?>

    <div class="col-xl-3 col-md-4 col-sm-6">
        <div class="showcase-item">
            <div class="showcase-item-img">
            <?php echo get_the_post_thumbnail(); ?>
            
            </div>
            <div class="showcase-item-data">
            <?php if( has_term('avto-v-ukraine', 'common_types') ) {
                            echo '<span class="in-ukr">В Украине</span>';
                        }
                        ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <!--<span class="acz-date">Дата аукциона: <?php the_field( 'date-au' ); ?></span>-->
                <div class="info-block">
                    <div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr1.svg" alt=""> <?php the_field( 'privod' ); ?></div>
                    <div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr2.svg" alt=""> <?php the_field( 'year' ); ?></div>
                    <div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr3.svg" alt=""> <?php the_field( 'run' ); ?> mi</div>
                    <div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr4.svg" alt=""> <?php the_field( 'korobka' ); ?></div>
                    <div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr5.svg" alt=""> <?php the_field( 'gaz' ); ?></div>
                    <div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr6.svg" alt=""> <?php the_field( 'type' ); ?></div>
                </div>
                <div class="showcase-item-bottom">
                    <span class="price">$<?php the_field( 'price' ); ?>
                    <?php if( !has_term('avto-v-ukraine', 'common_types') ) {
                            echo '<span class="inner-cond">(цена на аукционе)</span>';
                        }
                        ?>
                </span>
                    <a href="<?php the_permalink(); ?>">Подробнее</a>
                </div>
            </div>

        </div>
    </div>
<? endwhile; endif; wp_reset_query(); ?> 


			</div>
        </div>
        <a href="/katalog/" class="more">Смотреть больше авто</a>
    </section>
    


	<!-- <section class="acz-search">

		<div class="container-min">

			<form action="" id="dms-form">
				<h2 class="ta-left">Поиск авто на аукционах</h2>
				<div class="flex-form">
					<div class="flex-form-item">
						<p>Выберите Марку</p>
						<select name="brand" class="brandch">
                        <?php
                    
                    $categories = get_terms('category', 'orderby=name&hide_empty=0&parent=0&exclude=1&hierarchical=0');

                    if($categories){
                        foreach ($categories as $cat){
                            echo '<option value='. $cat->term_id .'>'; ?>
                            <?php echo $cat->name; ?>
                            <?php
                            echo '</option>';
                        }
                    }

                     ?>
						</select>
					</div>
					<div class="flex-form-item">
						<p>Выберите модель</p>
						<select value="" name="model" id="dms">
							<option>Выберите модель</option>
							
						</select>
					</div>
					<div class="flex-form-item">
						<p>Год пр-ва от</p>
						<select name="fromyear">
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
						</select>
					</div>
					<div class="flex-form-item">
						<p>Год пр-ва до</p>
						<select name="toyear">
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
						</select>
					</div>
					<div class="flex-form-item cente3 col-6 col-sm-4 col-lg-2">
						<button type="submit" class="want">Найти</button>
					</div>
				</div>
			</form>
		</div>
	</section> -->

	<section class="brand-search">
		<div class="container-min ">
			<div class="brand-search-wrap">
				<h2 class="ta-left">Поиск авто по марке</h2>
				<div class="row">
                    <?php
                    
                    $categories = get_terms('category', 'orderby=name&hide_empty=0&parent=0&exclude=1&hierarchical=0');

                    if($categories){
                        foreach ($categories as $cat){
                            echo '<div class="col-md-3 col-6 col-sm-4 col-lg-2">'; ?>
                            <a href="<?php echo get_term_link($cat->slug, $cat->taxonomy); ?>"><?php echo $cat->name; ?></a>
                            <?php
                            echo '</div>';
                        }
                    }

                    // echo '<pre>';
                    // print_r($categories);
                    // echo '</pre>';
                     ?>
				</div>
			</div>
		</div>
	</section>

	<section class="showcase">
		<h2 class="accent">Авто из Америки в Украине</h2>
		<!-- <a href="#" class="more">Смотреть Ближайшие аукционы</a> -->
		<div class="container-max">
			<div class="row">

            <?php 
$args = array( 'posts_per_page' => 8, 
'post_type' => 'post',
'meta_key'=> 'liders',
'meta_value'	=> true
 );
?>
<?php if ( have_posts() ) : query_posts($args);
while (have_posts()) : the_post(); ?>

                <div class="col-xl-3 col-md-4 col-sm-6">
					<div class="showcase-item">
						<div class="showcase-item-img">
                        <?php echo get_the_post_thumbnail(); ?>
						
						</div>
						<div class="showcase-item-data">
                        <?php if( has_term('avto-v-ukraine', 'common_types') ) {
                            echo '<span class="in-ukr">В Украине</span>';
                        }
                        ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<!--<span class="acz-date">Дата аукциона: <?php the_field( 'date-au' ); ?></span>-->
							<div class="info-block">
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr1.svg" alt=""> <?php the_field( 'privod' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr2.svg" alt=""> <?php the_field( 'year' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr3.svg" alt=""> <?php the_field( 'run' ); ?> mi</div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr4.svg" alt=""> <?php the_field( 'korobka' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr5.svg" alt=""> <?php the_field( 'gaz' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr6.svg" alt=""> <?php the_field( 'type' ); ?></div>
							</div>
							<div class="showcase-item-bottom">
								<span class="price">$<?php the_field( 'price' ); ?></span>
								<a href="<?php the_permalink(); ?>">Подробнее</a>
							</div>
						</div>

					</div>
				</div>
<? endwhile; endif; wp_reset_query(); ?> 


			</div>
		</div>
	</section>

	<section class="calc">
		<div class="container-min">
			<h2 class="ta-left">Онлайн калькулятор растаможки авто в Украине</h2>
			<div class="row">
				<div class="col-md-4 eq-calc">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#avto-calc">авто</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#gruz-calc">грузовые</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#moto-calc">мото</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#electro-calc">электро</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane container active" id="avto-calc">
							<form class="count-form">
								<span>Тип двигателя:</span>

								<div class="avto-calc-flex-radio">
									<p><input type="radio" id="benz" class="gasoline" name="gasoline" value="benz" checked> <label
											for="benz">бензиновый</label></p>
									<p><input type="radio" id="diesel" class="gasoline" name="gasoline" value="diesel"> <label
											for="diesel">дизельный</label></p>
								</div>

								<div class="avto-calc-flex">
									<p><label for="ob-engine">Объем двигателя:</label> 
                                    <input type="text" id="ob-engine" name="ob-engine" placeholder="1598 куб.см." required> </p>
									<p><label for="year">Год пр-ва:</label>
										<select name="year" id="year">
                                        <option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option> 
										</select>
									</p>
								</div>
								<p class="cost">
									<label for="cost">Стоимость авто (USD):</label>
									<input type="text" id="cost" name="cost" placeholder="Стоимость авто (USD):" required>
								</p>
								<div class="center-but"><button type="submit" class="want">РАСЧЕТ</button></div>

							</form>
                        </div>
                        

						<div class="tab-pane container fade" id="gruz-calc">
							<form class="gruz-form">
								<div class="avto-calc-flex">
									<p><label for="ob-engine">Объем двигателя:</label> 
                                    <input type="text" id="ob-engine-gruz" name="ob-engine" placeholder="1998 куб.см." required> </p>
									<p><label for="year">Год пр-ва:</label>
										<select name="year" id="year-gruz">
                                        <option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option> 
										</select>
									</p>
								</div>
								<p class="cost">
									<label for="cost">Стоимость авто (USD):</label>
									<input type="text" id="cost-gruz" name="cost" placeholder="Стоимость авто (USD):" required>
								</p>
								<div class="center-but"><button type="submit" class="want">РАСЧЕТ</button></div>

							</form>
                        </div>
                        

						<div class="tab-pane container fade" id="moto-calc">
							<form class="calc-moto">
								<div class="avto-calc-flex">
									<p><label for="ob-engine">Объем двигателя:</label> <input type="text" id="ob-engine-moto"
											name="ob-engine" placeholder="500 куб.см."> </p>
									<p><label for="year">Год пр-ва:</label>
										<select value="" name="year" id="year-moto">
                                        <option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
										</select>
									</p>
								</div>
								<p class="cost">
									<label for="cost">Стоимость авто (USD):</label>
									<input type="text" id="cost-moto" name="cost" placeholder="Стоимость авто (USD):">
								</p>
								<div class="center-but"><button type="submit" class="want">РАСЧЕТ</button></div>

							</form>
                        </div>
                        

						<div class="tab-pane container fade" id="electro-calc">
							<form class="count-form-electro">
								<div class="avto-calc-flex">
									<p><label for="ob-engine">Мощность:</label> <input type="text" id="ob-engine-electr"
											name="ob-engine" placeholder="150кВт"> </p>
									<p><label for="year">Год пр-ва:</label>
										<select name="year" id="year-electr">
											<option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
										</select>
									</p>
								</div>
								<p class="cost">
									<label for="cost">Стоимость авто (USD):</label>
									<input type="text" id="cost-electr" name="cost" placeholder="Стоимость авто (USD):">
								</p>
								<div class="center-but"><button type="submit" class="want">РАСЧЕТ</button></div>
                                
							</form>
                            
						</div>
                        <p class="res-cost">Итого, на таможню нужно заплатить <span>0</span> $</p>
                        <span class="d-none" id="kurs">28</span>
					</div>
                   
				</div>
				<div class="col-md-8 eq-calc">
					<div class="flex-result-wrap">
						<div class="flex-result">
							<span>Ввозная пошлина $</span>
							<span id="poshlina">0</span>
						</div>
						<div class="flex-result">
							<span>НДС $</span>
							<span id="nds">0</span>
						</div>
						<div class="flex-result">
							<span>Акцизний збор $</span>
							<span id="akzc">0</span>
						</div>
						<div class="flex-result">
							<span class="bold-res">Итого таможенный платеж: ($)</span>
							<span id="tamoj">0</span>
						</div>
						<p>* Не забудьте о доп расходах обязательны для постановки на учет</p>
						<div class="flex-result-500">
							<span>Сертификация</span>
							<span>5000 грн </span>
						</div>
						<div class="flex-result-500">
							<span>Сбор в Пенсионный фонд</span>
							<span id="pens">50 грн </span>
						</div>
                        <p class="pensia-inform">3% от стоимости авто если сумма до 346 830 грн, 4% если стоимость не превышает  609 580 грн, 5% - при стоимости свыше 609 580 грн.</p>
						<div class="result-links">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/docs.svg" alt=""> Документы которые необходимы</a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/calc.svg" alt=""> Примеры просчетов, за что и как платить</a>
							<a href="/novosti/"><img src="<?php echo get_template_directory_uri(); ?>/img/news.svg" alt=""> Новости</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="why">
		<h2>Почему стоит покупать БУ авто из Америки с нами</h2>
		<div class="container-min">
			<div class="row d-none d-md-flex">
				<div class="col-md-6">
					<p class="accent-why">Описание услуги</p>
				</div>
				<div class="col-md-3">
					<p class="accent-why">AUTOKOSMOS</p>
				</div>
				<div class="col-md-3">
					<p class="accent-why">Предложение на рынке</p>
				</div>
			</div>


			<div class="row">
				<div class="col-6 col-md-6 eq-concur">
					<p class="item-why">Выбор автомобиля с американских аукционов прямо у нас на сайте не заходя на англоязычные аукционные каталоги (Copart, IAAI)</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>--> 
					</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>--> 
					</p>
				</div>
				<div class="col-6 d-block d-md-none eq-concur">
					<p class="item-why item-why eq-half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
                        <span class="concur-title">Auto Cosmos</span>
						<!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span> -->
					</p>
					<p class="item-why item-why eq-half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
                        <span class="concur-title">Предложения на рынке</span>
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-md-6 eq-concur">
					<p class="item-why">Подборка автомобиля и проверка его по более чем 10 внутренним базам США</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
				<div class="col-6 d-block d-md-none eq-concur">
					<p class="item-why item-why eq-half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
                        <span class="concur-title">Auto Cosmos</span>
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
					<p class="item-why item-why eq-half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
                        <span class="concur-title">Предложения на рынке</span>
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-md-6 eq-concur">
					<p class="item-why">Оформление документов и погрузка Автомобиля.</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
				<div class="col-6 d-block d-md-none eq-concur">
					<p class="item-why item-why eq-half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
                        <span class="concur-title">Auto Cosmos</span>
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
					<p class="item-why item-why eq-half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
                        <span class="concur-title">Предложения на рынке</span>
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-md-6 eq-concur">
					<p class="item-why">Доставка автомобиля от 6 до 8 недель с любого штата США в Украину</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
						<!-- <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
						<!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
				<div class="col-6 d-block d-md-none eq-concur">
					<p class="item-why item-why eq-half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
                        <span class="concur-title">Auto Cosmos</span>
						<!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
					<p class="item-why item-why eq-half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
                        <span class="concur-title">Предложения на рынке</span>
						<!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-md-6 eq-concur">
					<p class="item-why">Страховка от полной потери груза и дополнительное страхование всех частей автомобиля </p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
						<!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
				<div class="col-md-3 d-none d-md-block">
					<p class="item-why item-why">
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
						<!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
				<div class="col-6 d-block d-md-none eq-concur">
					<p class="item-why item-why eq-half">                        
						<img src="<?php echo get_template_directory_uri(); ?>/img/plus.svg" alt="">
                        <span class="concur-title">Auto Cosmos</span>
						<!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
					<p class="item-why item-why eq-half">                        
						<img src="<?php echo get_template_directory_uri(); ?>/img/minus.svg" alt="">
                        <span class="concur-title">Предложения на рынке</span>
						<!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
					</p>
				</div>
			</div>

			
		</div>
	</section>

	<section class="auction">
		<h2>Аукционы, в которых мы участвуем</h2>
		<div class="container-max">
			<div class="owl-carousel owl-theme owl-auction">


    <?php 
        $args = array( 'posts_per_page' => -1, 'post_type' => 'auk'  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>
				<div class="item auction-item">
					<div class="item-img">
						<img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-responsive">
					</div>
					<p><?php the_title(); ?></p>
					<span><?php the_excerpt();?></span>
					<a href="<?php the_permalink(); ?>">Подробнее</a>
				</div>
         <? endwhile; endif; wp_reset_query(); ?>		
			
			</div>
		</div>
	</section>

<section>
        <div class="container usluga-block">
        <?php
            /* Start the Loop */
            while ( have_posts() ) :  the_post(); ?>
            
        <?php		
        the_content();
            endwhile;
        ?>
        </div>
</section>
<br><br>

<?php get_footer(); ?>
