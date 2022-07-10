<?php get_header(); ?>
<?php 
$catname = get_queried_object();
// echo '<pre>';
// print_r($catname);
// echo '</pre>';
?>

<div class="catalog-cats">
        <div class="container-max">
            <div class="catalog-cats-row">

            <?php
            $categories_type = get_terms('car_types', 'order=ASC&hide_empty=0');

	if($categories_type){
		foreach ($categories_type as $cat){ ?>
			<a href="<?php echo get_term_link($cat->slug, $cat->taxonomy); ?>"><img src="<?php the_field('brand_img', $cat);?>"></a>
            <a href="<?php echo get_term_link($cat->slug, $cat->taxonomy); ?>" class="catalog-cats-item">
                    <img src="<?php the_field('type_img', $cat);?>" alt="">
                    <p><?php echo $cat->name; ?></p>
				</a>
			<?php
			
		}
	}
?>
            </div>
        </div>
    </div>





	<div class="wrap-filter-open d-block d-lg-none">
		<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#filteropen">
			<a class="card-title" id="titleTab2"> <img src="<?php echo get_template_directory_uri(); ?>/img/filter.svg" alt=""></a>
		</div>
		<div id="filteropen" class=" collapse" data-parent="#accordion">
			<div class="card-body" id="tabText2">
				<div class="filter">
						<div class="wrapper center-block">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						
							<div class="panel panel-default">
							  <div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
								  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk1m" aria-expanded="false" aria-controls="collapseTwo">Кузов </a>
								</h4>
							  </div>
							  <div id="filter-desk1m" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body filter-type">
                                 <a href="#" data-idn="type" data-type="sedan" class="filter-el">Седан</a>
                                 <a href="#" data-idn="type" data-type="universal" class="filter-el">Универсал</a>
                                 <a href="#" data-idn="type" data-type="hatchback" class="filter-el">Хэтчбек</a>
                                 <a href="#" data-idn="type" data-type="crossover" class="filter-el">Внедорожник</a>
                                 <a href="#" data-idn="type" data-type="coup" class="filter-el">Купе</a>
                                 <a href="#" data-idn="type" data-type="cabrio" class="filter-el">Кабриолет</a>
                                 <a href="#" data-idn="type" data-type="pickup" class="filter-el">Пикап</a>
                                 <a href="#" data-idn="type" data-type="gruzovik" class="filter-el">Грузовик</a>
                                 <a href="#" data-idn="type" data-type="miniven" class="filter-el">Минивен</a>
								</div>
							  </div>
							</div>
							<div class="panel panel-default">
							  <div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
								  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk2m" aria-expanded="false" aria-controls="collapseThree">цена	  </a>
								</h4>
							  </div>
							  <div id="filter-desk2m" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body filter-price">
								  <a href="#" data-idn="price" data-price="8000" class="filter-el">до $8000</a>
                                  <a href="#" data-idn="price" data-price="10000" class="filter-el">до $10 000</a>
                                  <a href="#" data-idn="price" data-price="15000" class="filter-el">до $15 000</a>
                                  <a href="#" data-idn="price" data-price="20000" class="filter-el">до $20 000</a>
                                  <a href="#" data-idn="price" data-price="25000" class="filter-el">до $25 000</a>
								</div>
							  </div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk3m" aria-expanded="false" aria-controls="collapseThree">марка </a>
								  </h4>
								</div>
								<div id="filter-desk3m" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body">
                                  <?php
                    
                                    $categories = get_terms('category', 'orderby=name&hide_empty=1&parent=0&exclude=1&hierarchical=0');

                                    if($categories){
                                        foreach ($categories as $cat){ ?>
                                        <a href="#" data-idn="brand" data-brand="<?php echo $cat->term_id; ?>" class="filter-el"><?php echo $cat->name; ?></a>
                                            
                                        <?php
                                        }
                                    }

                                    ?>
								  </div>
								</div>
							  </div>

							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk4m" aria-expanded="false" aria-controls="collapseThree">модель </a>
								  </h4>
								</div>
								<div id="filter-desk4m" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body dinamic-model">
									  --Выберите марку--
								  </div>
								</div>
							  </div>


							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk5m" aria-expanded="false" aria-controls="collapseThree">год </a>
								  </h4>
								</div>
								<div id="filter-desk5m" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body filter-year">
								<a href="#" data-idn="year" data-year="2008" class="filter-el">2008</a>
								<a href="#" data-idn="year" data-year="2009" class="filter-el">2009</a>
								<a href="#" data-idn="year" data-year="2010" class="filter-el">2010</a>
								<a href="#" data-idn="year" data-year="2011" class="filter-el">2011</a>
								<a href="#" data-idn="year" data-year="2012" class="filter-el">2012</a>
								<a href="#" data-idn="year" data-year="2013" class="filter-el">2013</a>
								<a href="#" data-idn="year" data-year="2014" class="filter-el">2014</a>
								<a href="#" data-idn="year" data-year="2015" class="filter-el">2015</a>
								<a href="#" data-idn="year" data-year="2016" class="filter-el">2016</a>
								<a href="#" data-idn="year" data-year="2017" class="filter-el">2017</a>
								<a href="#" data-idn="year" data-year="2018" class="filter-el">2018</a>
								<a href="#" data-idn="year" data-year="2019" class="filter-el">2019</a>
								<a href="#" data-idn="year" data-year="2020" class="filter-el">2020</a>
								  </div>
								</div>
							  </div>

							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk6m" aria-expanded="false" aria-controls="collapseThree">привод </a>
								  </h4>
								</div>
								<div id="filter-desk6m" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body filter-privod">
                                  <a href="#" data-idn="privod" data-privod="perednij" class="filter-el">Передний</a>
                                  <a href="#" data-idn="privod" data-privod="zadnij" class="filter-el">Задний</a>
                                  <a href="#" data-idn="privod" data-privod="polnyj" class="filter-el">Полный</a>
								  </div>
								</div>
							  </div>

							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk7m" aria-expanded="false" aria-controls="collapseThree">топливо </a>
								  </h4>
								</div>
								<div id="filter-desk7m" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body filter-gaz">
                                  <a href="#" data-idn="gaz" data-gaz="benz" class="filter-el">Бензин</a>
                                  <a href="#" data-idn="gaz" data-gaz="diesel" class="filter-el">Дизель</a>
                                  <a href="#" data-idn="gaz" data-gaz="lpg" class="filter-el">Газ/Бензин</a>
                                  <a href="#" data-idn="gaz" data-gaz="gybrid" class="filter-el">Гибрид</a>
                                  <a href="#" data-idn="gaz" data-gaz="electro" class="filter-el">Электро</a>
								  </div>
								</div>
							  </div>

							  <!-- <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk8" aria-expanded="false" aria-controls="collapseThree">тип повреждения </a>
								  </h4>
								</div>
								<div id="filter-desk8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body">
									  фильтра
								  </div>
								</div>
							  </div> -->

							  <a href="#" class="reset" onclick="location.reload(); return false; ">Сбросить все фильтри</a>
							  <a href="#" class="want search">Найти</a>
						  </div>
						  </div>
					</div>
			</div>
		</div>
	</div>
	<section class="cat-list">
		<div class="container-max">
			<div class="row">
				<div class="col-md-3 d-none d-lg-block">
					<div class="filter">
						<div class="wrapper center-block">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						
							<div class="panel panel-default">
							  <div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
								  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk1" aria-expanded="false" aria-controls="collapseTwo">Кузов </a>
								</h4>
							  </div>
							  <div id="filter-desk1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body filter-type">
                                 <a href="#" data-idn="type" data-type="sedan" class="filter-el">Седан</a>
                                 <a href="#" data-idn="type" data-type="universal" class="filter-el">Универсал</a>
                                 <a href="#" data-idn="type" data-type="hatchback" class="filter-el">Хэтчбек</a>
                                 <a href="#" data-idn="type" data-type="crossover" class="filter-el">Внедорожник</a>
                                 <a href="#" data-idn="type" data-type="coup" class="filter-el">Купе</a>
                                 <a href="#" data-idn="type" data-type="cabrio" class="filter-el">Кабриолет</a>
                                 <a href="#" data-idn="type" data-type="pickup" class="filter-el">Пикап</a>
                                 <a href="#" data-idn="type" data-type="gruzovik" class="filter-el">Грузовик</a>
                                 <a href="#" data-idn="type" data-type="miniven" class="filter-el">Минивен</a>
								</div>
							  </div>
							</div>
							<div class="panel panel-default">
							  <div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
								  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk2" aria-expanded="false" aria-controls="collapseThree">цена	  </a>
								</h4>
							  </div>
							  <div id="filter-desk2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body filter-price">
								  <a href="#" data-idn="price" data-price="8000" class="filter-el">до $8000</a>
                                  <a href="#" data-idn="price" data-price="10000" class="filter-el">до $10 000</a>
                                  <a href="#" data-idn="price" data-price="15000" class="filter-el">до $15 000</a>
                                  <a href="#" data-idn="price" data-price="20000" class="filter-el">до $20 000</a>
                                  <a href="#" data-idn="price" data-price="25000" class="filter-el">до $25 000</a>
								</div>
							  </div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk3" aria-expanded="false" aria-controls="collapseThree">марка </a>
								  </h4>
								</div>
								<div id="filter-desk3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body">
                                  <?php
                    
                                    $categories = get_terms('category', 'orderby=name&hide_empty=1&parent=0&exclude=1&hierarchical=0');

                                    if($categories){
                                        foreach ($categories as $cat){ ?>
                                        <a href="#" data-idn="brand" data-brand="<?php echo $cat->term_id; ?>" class="filter-el"><?php echo $cat->name; ?></a>
                                            
                                        <?php
                                        }
                                    }

                                    ?>
								  </div>
								</div>
							  </div>

							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk4" aria-expanded="false" aria-controls="collapseThree">модель </a>
								  </h4>
								</div>
								<div id="filter-desk4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body dinamic-model">
									  --Выберите марку--
								  </div>
								</div>
							  </div>


							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk5" aria-expanded="false" aria-controls="collapseThree">год </a>
								  </h4>
								</div>
								<div id="filter-desk5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body filter-year">
                                <a href="#" data-idn="year" data-year="2008" class="filter-el">2008</a>
								<a href="#" data-idn="year" data-year="2009" class="filter-el">2009</a>
								<a href="#" data-idn="year" data-year="2010" class="filter-el">2010</a>
								<a href="#" data-idn="year" data-year="2011" class="filter-el">2011</a>
								<a href="#" data-idn="year" data-year="2012" class="filter-el">2012</a>
								<a href="#" data-idn="year" data-year="2013" class="filter-el">2013</a>
								<a href="#" data-idn="year" data-year="2014" class="filter-el">2014</a>
								<a href="#" data-idn="year" data-year="2015" class="filter-el">2015</a>
								<a href="#" data-idn="year" data-year="2016" class="filter-el">2016</a>
								<a href="#" data-idn="year" data-year="2017" class="filter-el">2017</a>
								<a href="#" data-idn="year" data-year="2018" class="filter-el">2018</a>
								<a href="#" data-idn="year" data-year="2019" class="filter-el">2019</a>
								<a href="#" data-idn="year" data-year="2020" class="filter-el">2020</a>
								  </div>
								</div>
							  </div>

							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk6" aria-expanded="false" aria-controls="collapseThree">привод </a>
								  </h4>
								</div>
								<div id="filter-desk6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body filter-privod">
                                  <a href="#" data-idn="privod" data-privod="perednij" class="filter-el">Передний</a>
                                  <a href="#" data-idn="privod" data-privod="zadnij" class="filter-el">Задний</a>
                                  <a href="#" data-idn="privod" data-privod="polnyj" class="filter-el">Полный</a>
								  </div>
								</div>
							  </div>

							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk7" aria-expanded="false" aria-controls="collapseThree">топливо </a>
								  </h4>
								</div>
								<div id="filter-desk7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body filter-gaz">
                                  <a href="#" data-idn="gaz" data-gaz="benz" class="filter-el">Бензин</a>
                                  <a href="#" data-idn="gaz" data-gaz="diesel" class="filter-el">Дизель</a>
                                  <a href="#" data-idn="gaz" data-gaz="lpg" class="filter-el">Газ/Бензин</a>
                                  <a href="#" data-idn="gaz" data-gaz="gybrid" class="filter-el">Гибрид</a>
                                  <a href="#" data-idn="gaz" data-gaz="electro" class="filter-el">Электро</a>
								  </div>
								</div>
							  </div>

							  <!-- <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#filter-desk8" aria-expanded="false" aria-controls="collapseThree">тип повреждения </a>
								  </h4>
								</div>
								<div id="filter-desk8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								  <div class="panel-body">
									  фильтра
								  </div>
								</div>
							  </div> -->

							  <a href="#" class="reset" onclick="location.reload(); return false; ">Сбросить все фильтри</a>
							  <a href="#" class="want search">Найти</a>
						  </div>
						  </div>
					</div>
				</div>

				<div class="col-12 d-block d-lg-none arch-dinamo-mob">
					<div class="row">
                  

 <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$original_query = $wp_query;
$wp_query = null;
$args=array('posts_per_page'=>10, 'post_type' => 'post', 'paged'=>$paged);
$wp_query = new WP_Query( $args );

if ( have_posts() ) :
    while (have_posts()) : the_post(); ?>
						<div class="col-xl-3 col-md-4 col-sm-6">
							<div class="showcase-item">
								<div class="showcase-item-img">
                                <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	                    echo $large_image_url[0]; ?>" alt="sitename">
								</div>
								<div class="showcase-item-data">
									<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
									<span class="acz-date">Дата аукциона: <?php the_field( 'date-au' ); ?></span>
									<div class="info-block">
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr1.svg" alt=""> <?php the_field( 'privod' ); ?></div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr2.svg" alt=""> <?php the_field( 'year' ); ?></div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr3.svg" alt=""> <span class="format-run"><?php the_field( 'run' ); ?></span> mi</div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr4.svg" alt=""> <?php the_field( 'korobka' ); ?></div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr5.svg" alt=""> <?php the_field( 'gaz' ); ?></div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr6.svg" alt=""> <?php the_field( 'liter' ); ?></div>
									</div>
									<div class="showcase-item-bottom">
										<span class="price">$<?php the_field( 'price' ); ?></span>
										<a href="<?php the_permalink();?>">Подробнее</a>
									</div>
								</div>
							</div>
						</div>
                    <?php endwhile;
previous_posts_link(); 
next_posts_link();


endif;
$wp_query = null;
$wp_query = $original_query;    
wp_reset_postdata();    
?>  				




                    </div>
                  
				</div>

				<div class="col-md-9 d-none d-lg-block arch-dinamo-desktop">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$original_query = $wp_query;
$wp_query = null;
$args=array('posts_per_page'=>10, 'post_type' => 'post', 'paged'=>$paged);
$wp_query = new WP_Query( $args );

if ( have_posts() ) :
    while (have_posts()) : the_post(); ?>			
					<div class="list-item">
						<div class="list-item-img">
                        
                        <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	                    echo $large_image_url[0]; ?>" alt="sitename">
                        
                        </div>
						<div class="list-item-data">
							<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
							<div class="date">Дата аукциона: <span><?php the_field( 'date-au' ); ?></span> </div>
							<div class="param-flex">
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/privod.svg" alt=""><?php the_field( 'privod' ); ?></div>
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/gas.svg" alt=""><?php the_field( 'gaz' ); ?></div>
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/calendar.svg" alt=""><?php the_field( 'year' ); ?></div> 
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/raod.svg" alt=""><span class="format-run"><?php the_field( 'run' ); ?></span> mi</div> 
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/trans.svg" alt=""><?php the_field( 'korobka' ); ?></div> 
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/type.svg" alt=""><?php the_field( 'liter' ); ?></div> 
								<div class="price">$<?php the_field( 'price' ); ?></div>
								<div class="permalink"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
								<div class="to-cart-wrap"><a href="#" class="to-cart want">Купить</a></div>	
							</div>
						</div>
					</div>
                <?php endwhile;
previous_posts_link(); 
next_posts_link();


endif;
$wp_query = null;
$wp_query = $original_query;    
wp_reset_postdata();    
?>  




                </div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>
