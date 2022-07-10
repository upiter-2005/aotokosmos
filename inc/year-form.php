<?php 
require($_SERVER['DOCUMENT_ROOT'].'wp-load.php'); 
$term_slug = $_POST['data'];

$arr_years = [];
for ($i = 2008; $i < 2021; $i++){
    $args  = array( 
        'post_type' => 'post',
        
        'meta_query' => array(
            array(
                'key' => 'year',
                'value'    => $i,
            )
            ),
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $term_slug
            )
        )
            );
    
    $the_query = new WP_Query( $args );
    
    ?>
    <?php if( $the_query->have_posts() ): ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php 
                        if (!in_array($i, $arr_years)){
                            array_push ($arr_years, $i);
                            
                           // echo $i;
                        } ?>
                           
                                
                        <?php
    
    endwhile;
    
    wp_reset_postdata();
    else :
     //echo $i . '- Автомобилей не найдено';
    endif;
    
    ?>
<?php    
}
foreach ($arr_years as $year){
    echo '<a href=/' .$term_slug . '/' . $year . '>'. $year . '</a>';
}
 


