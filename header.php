<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->
<?php 
// if(is_category()) {
//     $categories = get_the_category();
//     $category_id = $categories[0]->term_id;
//     echo '<link rel="canonical" href="' .  get_category_link($category_id) . '" />';
// }
 get_query_var('paged');
if (is_archive()){
    $post_type = 'archive';
    $alias = array();
    $terms = get_queried_object();
    $permalink = get_permalink();
    //  echo '<pre>';
    // print_r($terms);
    // echo '</pre>';



    if(get_query_var('yearcar')){
        $year = get_query_var('yearcar');
        if($terms->parent == 0){
            array_push($alias, $terms->name);
            array_push($alias, get_field('alias_en',  $terms));
    
            do_action( 'archive_seo_brand_year', $post_type,  $alias, $year, $permalink );
            
        }else{
         
            $term = get_term( $terms->parent, 'category' );
            array_push($alias, $term->name);
            array_push($alias, get_field('alias_en',  $term));


            array_push($alias, $terms->name);
            array_push($alias, get_field('alias_en',  $terms)); 
           
            do_action( 'archive_seo_model_year', $post_type,  $alias, $year, $permalink );
        }

    }else{
        if($terms->parent == 0){
            array_push($alias, $terms->name);
            array_push($alias, get_field('alias_en',  $terms));
    
            do_action( 'archive_seo_brand', $post_type,  $alias, $permalink );
            
        }else{
         
            $term = get_term( $terms->parent, 'category' );
                array_push($alias, $term->name);
                array_push($alias, get_field('alias_en',  $term));
               
    
                array_push($alias, $terms->name);
                array_push($alias, get_field('alias_en',  $terms));
           
            do_action( 'archive_seo_model', $post_type,  $alias, $permalink );
        }
    }
}


if (is_single()){
    $post_type = 'single';
    $odometr =  get_field( 'run' );
    $vin_code = get_field( 'win' );
    $permalink = get_permalink();
    $year = get_field( 'year' );
    $price = get_field( 'price' );
    $car_name = get_the_title();
    $thumb = get_the_post_thumbnail_url();
    $alias = array();
    $terms = get_the_terms( $post->ID, 'category' );
    // echo '<pre>';
    //  print_r($terms);
    //  echo '</pre>';
        foreach( $terms as $term ){
            if($term->parent){
                $alias[1] = $term->name;
                $alias[3] = get_field('alias_en',  $term);
            }else{
                $alias[0] = $term->name;
                $alias[2] = get_field('alias_en',  $term);
            }


            // array_push($alias, $term->name);
            // array_push($alias, get_field('alias_en',  $term));
            //   echo '1 ' .$term->name;
            //   the_field('alias_en',  $term);
        }
    do_action( 'single_seo', $post_type,  $year, $car_name, $alias, $price, $permalink, $thumb, $odometr, $vin_code  );
}




if (is_page()){

    if(is_front_page()){
        $slogan = 'купить Авто из США в Киеве - AUTOKOSMOS';
        echo '<title>Купить авто из США в Украине - Цена на машины из Америки под ключ от Autokosmos</title>' ;
        echo '<meta name="description" content="Купить авто из США в Украине - Цена на машины из Америки под ключ от Autokosmos" />';
        
        echo '
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:title" content="Купить авто из США в Украине - Цена на машины из Америки под ключ от Autokosmos" />
        <meta property="og:url" content="https://autokosmos.com.ua" />
        <meta property="og:image" content="https://autokosmos.com.ua/wp-content/themes/avtokosmos/img/fon.jpg" />
        <meta property="og:site_name" content="купить Авто из США в Киеве - AUTOKOSMOS" />
     ';
     echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />';
    }else{
        $post_type = 'page';
        $title = get_the_title();
        $permalink = get_permalink();
    
        do_action( 'archive_seo_page', $post_type, $title, $permalink );
    }
    
}

?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->


	<!-- <link rel="canonical" href="https://autokosmos.com.ua/" /> -->
    <?php if(is_category()){
        if(get_query_var('paged')){
          
        }else{
            if(get_query_var('yearcar')){
                $category = get_category( get_query_var( 'cat' ) );
                if($category->parent){
                    $parent = get_term($category->parent);
                    //echo $parent->slug ;
                   // echo  $category->slug ;
                    echo '<link rel="canonical" href="https://autokosmos.com.ua/'. $parent->slug . '/'. $category->slug .'/'. get_query_var('yearcar') .'/" />';
                }else{
                    //echo  $category->slug;
                    echo '<link rel="canonical" href="https://autokosmos.com.ua/'. $category->slug .'/'.get_query_var('yearcar').'/" />';
                }
            }else{
                $category = get_category( get_query_var( 'cat' ) );
                if($category->parent){
                    $parent = get_term($category->parent);
                    //echo $parent->slug ;
                   // echo  $category->slug ;
                    echo '<link rel="canonical" href="https://autokosmos.com.ua/'. $parent->slug . '/'. $category->slug .'/" />';
                }else{
                    //echo  $category->slug;
                    echo '<link rel="canonical" href="https://autokosmos.com.ua/'. $category->slug .'/" />';
                }
            }
        }

       

    }elseif(is_tax( 'common_types' )){
        if(get_query_var('paged')){
          
        }else{
            $tax = $wp_query->get_queried_object();
            echo ' <link rel="canonical" href="https://autokosmos.com.ua/' . $tax->slug . '/" />';
        }
      
    }elseif(is_tax( 'car_types' )){
        if(get_query_var('paged')){
          
        }else{
            $tax = $wp_query->get_queried_object();
            echo ' <link rel="canonical" href="https://autokosmos.com.ua/' . $tax->slug . '/" />';
        }
        
    }else{
        rel_canonical();
    }
     ?>

	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-180x180.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
	<!-- Template Basic Images End -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->



      <?php wp_head(); ?>
      <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '437743967462480'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=437743967462480&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T2P4GX3');</script>
<!-- End Google Tag Manager -->



</head>




<body>

<?php  $rewrite_rules = get_option( 'rewrite_rules' );
    
 
    //print_r($rewrite_rules);
   

    //$wp_rewrite->non_wp_rules = array( 'dir1/(.*)$' => 'index.php?category_name=$1' );

//print_r( $wp_rewrite->mod_rewrite_rules() );

?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2P4GX3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<div id="moby-mnu">
		<div class="close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></div>
		<div class="mob-list-wrap">
			<a href="#" class="mob-list-a">Главная</a>
			<a href="/novosti/" class="mob-list-a">Новости</a>
			<a href="/kredit/" class="mob-list-a">Кредит</a>
			<a href="/kontakty/" class="mob-list-a">Контакты</a>
			<a href="/vopros-otvet/" class="mob-list-a">Вопрос-Ответ</a>
			
			
			<a href="/uslugi/" class="mob-list-a">Услуги</a>
			<a href="/otzyvy/" class="mob-list-a">Отзывы </a>

			<div class="mob-cats">
				<a href="/avto-v-ukraine/">авто в украине</a>
				<a href="/avto-do-8000/">авто до 8 000$</a>
				<a href="/avto-do-10-000/">авто до 10 000$</a>
				<a href="/avto-do-15-000/">авто до 15 000$</a>
                <a href="/maslkary/">Маслкары</a>
                <a href="/gibridy/">Гибриды</a>
				<a href="/elektrokary/">Электрокары</a>
				<a href="/kalkulyator/">Калькулятор </a>
			</div>
			
		</div>	
	</div>
	

	<div id="mob-list">
		<a href="#" class="close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></a>
		<div class="mob-list-box">
			<a href="/avto-v-ukraine/" class="mob-list-a">авто в украине</a>
			<a href="/avto-do-8000/" class="mob-list-a">авто до 8 000$</a>
			<a href="/avto-do-10-000/" class="mob-list-a">авто до 10 000$</a>
			<a href="/avto-do-15-000/" class="mob-list-a">авто до 15000$</a>
			<a href="/elektrokary/" class="mob-list-a">Электрокары</a>
            <a href="/uslugi/" class="mob-list-a">Услуги</a>
            <a href="/kalkulyator/" class="mob-list-a">Калькулятор </a>
			<a href="/otzyvy/" class="mob-list-a">Отзывы</a>
		</div>
	</div>


	<header>
		<div class="container-max">
			<div class="top">
				<div class="left-top">
					<a href="#" class="open-mob"><img src="<?php echo get_template_directory_uri(); ?>/img/bar.svg" alt="" class="d-block d-xl-none"></a>
					<a href="tel:+380501974899" class="top-tel">+38 (050) 197 48 99</a>
				</div>

				<div class="top-mnu d-none d-xl-flex">
					<a href="/">Главная</a>
					<a href="/novosti/">Новости</a>
					<a href="/kredit/">Кредит</a>
					<a href="/kontakty/">Контакты</a>
					<a href="/vopros-otvet/">Вопрос-Ответ</a>
				</div>
				<div class="top-right">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt=""></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/yt.svg" alt=""></a>
					<a href="https://www.instagram.com/autokosmosusa/"><img src="<?php echo get_template_directory_uri(); ?>/img/ig.svg" alt=""></a>
				</div>
			</div>

		</div>

	</header>

	<div class="bottom-mnu">
		<div class="container-max">

			<div class="row align-items-center justify-content-between">
				<div class="col-xl-1 d-none d-xl-block"><a href="#" class="open-mnu "><img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg"
							alt="">Меню</a></div>

				<div class="col-md-4 d-none d-xl-block">
					<div class="mnu-items">
						<a href="/auktsion/">Аукцион</a>
						<a href="/uslugi/">Услуги</a>
						<a href="/byudzhetnye-avto/">Бюджетные авто </a>
						<a href="/elektrokary/">Электрокары </a>
						<!-- <a href="//">Аукцион </a> -->
					</div>
				</div>

				<div class="col-xl-2 col-6 center"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" class="logo-img"></a></div>

				<div class="col-md-3 d-none d-xl-block">
					<div class="mnu-items">
						<a href="/gibridy/">Гибриды </a>
						<a href="/otzyvy/">Отзывы</a>
						<a href="/avto-v-ukraine/">Авто в Украине</a>
					</div>
				</div>

				<div class="col-xl-2 col-6 center">
					<a href="#popup-call" class="want open-popup-link">Заказать звонок</a>
				</div>
			</div>

		</div>
	</div>


