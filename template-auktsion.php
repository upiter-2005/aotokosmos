<?php get_header(); ?>


<?php 


$catname = get_queried_object();
// echo '<pre>';
// print_r($catname);
// echo '</pre>';
    if ($catname->parent){
        $parent_id = $catname->parent;
        $parent_title = get_cat_name($parent_id) . ' ' . $catname->name;
        
    }else{
        $parent_title = $catname->name; ?>
          <script>createModel('<?php echo $catname->slug ?>');</script>  
        <?php
    }

?>
<?php
    $submodel='';
    $termID = '';
    $cat = get_the_category($post->ID);
// echo '<pre>';
// print_r($cat);
// echo '</pre>';
    foreach ($cat as $cat_child) {
        if($cat_child->parent == 0){
            $termID = $cat_child->term_id;
            $termName = $cat_child->name;
        }else{
            $submodel = $cat_child->slug;
            
        }
    }
    
?>

<div class="breadcrumbs">
    <div class="container">
        <a href="/">Главная</a>
        <span>/</span>
        <span>Аукцион</span>
        <span>/</span>
        <span><?php echo get_query_var('yearcar');  ?></span>
    </div>
</div>


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




<h1 class="cat-h1">Автомобили <?php echo $parent_title; ?></h1>


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
									  < --Выберите марку-- 
                                     
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

							  <a href="#" class="reset" onclick="location.reload(); return false; ">Сбросить все фильтры</a>
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

							  <a href="#" class="reset" onclick="location.reload(); return false; ">Сбросить все фильтры</a>
							  <a href="#" class="want search">Найти</a>
						  </div>
						  </div>
					</div>
				</div>

				<div class="col-12 d-block d-lg-none arch-dinamo-mob">
					<div class="row">
					<?php
    if(get_query_var('yearcar')){ ?>
			<?php 
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'posts_per_page' => 25, 
				'post_type' => 'post',
				'paged' => $page,
				'tax_query' => array(
					array(
						'taxonomy' => $catname->taxonomy,
						'field'    => 'slug',
						'terms'    => $catname->slug
					)
				),
				'meta_query' => array(
					array(
						'key' => 'year',
						'value'    => get_query_var('yearcar'),
					)
				),
			);
			?>
      
   <?php }else{ ?>
			<?php 
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'posts_per_page' => 25, 
				'post_type' => 'post',
				'paged' => $page,
				'tax_query' => array(
					array(
						'taxonomy' => $catname->taxonomy,
						'field'    => 'slug',
						'terms'    => $catname->slug
					)
				),
				
			);
			?>
   <?php }
?>	
<?php if ( have_posts() ) : query_posts($args);
while (have_posts()) : the_post(); ?>	
						<div class="col-xl-3 col-md-4 col-sm-6">
							<div class="showcase-item">
								<div class="showcase-item-img">
                                <a href="<?php the_permalink();?>"> <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	                    echo $large_image_url[0]; ?>" alt="autokosmos"></a>
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
										<span class="price">$<?php the_field( 'price' ); ?>
                                        <?php if( !has_term('avto-v-ukraine', 'common_types') ) {
                                                echo '<span class="inner-cond">(цена на аукционе)</span>';
                                            }
                                            ?>
                                        </span>
										<a href="<?php the_permalink();?>">Подробнее</a>
									</div>
								</div>
							</div>
						</div>
<? endwhile; endif; wp_reset_query(); ?>  					




                    </div>
                    <?php the_posts_pagination(); ?>
				</div>

				<div class="col-md-9 d-none d-lg-block arch-dinamo-desktop">

<?php
    if(get_query_var('yearcar')){ ?>
			<?php 
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'posts_per_page' => 25, 
				'post_type' => 'post',
				'paged' => $page,
				// 
				'meta_query' => array(
					array(
						'key' => 'year',
						'value'    => get_query_var('yearcar'),
					)
				),
			);
			?>
      
   <?php }else{ ?>
			<?php 
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'posts_per_page' => 25, 
				'post_type' => 'post',
				'paged' => $page,
					
			);
			?>
   <?php }
?>				

<?php if ( have_posts() ) : query_posts($args);
while (have_posts()) : the_post(); ?>				
					<div class="list-item">
						<div class="list-item-img">
                        
                        <a href="<?php the_permalink();?>"><img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	                    echo $large_image_url[0]; ?>" alt="autokosmos"></a>
                        
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
								<div class="price">$<?php the_field( 'price' ); ?>
                                <?php if( !has_term('avto-v-ukraine', 'common_types') ) {
                                        echo '<span class="inner-cond">(цена на аукционе)</span>';
                                    }
                                    ?>
                                </div>
								<div class="permalink"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
								<div class="to-cart-wrap"><a href="#popup-product" class="to-cart want open-popup-link">Купить</a></div>	
							</div>
						</div>
					</div>
<? endwhile; endif; wp_reset_query(); ?>  


<div class="pagination-block"><?php the_posts_pagination(); ?></div>

                </div>
                
			</div>
		</div>
	</section>


    <section class="brand-search">
		<div class="container-min ">
			<div class="brand-search-wrap">
            
				<h2 class="ta-left">Другие модели марки <?php echo $termName; ?></h2>
				<div class="row">
                                
                <?php
                    $sub_cats = get_categories( array(
                        'child_of' => $termID,
                        'hide_empty' => 0
                ) );

                foreach ($sub_cats as $child) { 
                    
                    if($child->count != 0){?>
                    <a href="<?php echo get_term_link($child->slug, $child->taxonomy); ?>" ><?php echo $child->name; ?></a>
                    <?php }else{
                    
                        }
                    }
                ?>
				</div>
			</div>
		</div>
	</section>


    <section class="brand-search">
		<div class="container-min ">
			<div class="brand-search-wrap years-form">
            
				<h2 class="ta-left"> <?php echo $termName; ?> по годам</h2>
				<div class="row">
                                
                    <div id="yearsform"></div>
					
					  
					
				</div>
			</div>
		</div>
	</section>


    <div class="container-min">
        <?php echo category_description(); ?>        
    </div>

    

<?php get_footer(); ?>
