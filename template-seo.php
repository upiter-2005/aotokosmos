<?php
/**
 * Template Name: Template SEO (SEO)
 */
get_header(); ?>


<style>
    .seo-row{
        font-size: 13px;
        font-family: 'Roboto', sans-serif;
    }
    .seo-item{
        border-right: 1px solid #666;
        color: #777;
        padding: 3px 7px;
    }
    .seo-item input{
        width: 100%;
        text-align: center;
        background: #ccc;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .seo-row:hover{
        background-color: #ffe191;
    }
</style>


<div class="container-fluid">


<?php

$wpdb = new wpdb( 'autokosm_2021', '%sD6j47yV)', 'autokosm_2021', 'autokosm.mysql.tools' );
?>







<?php if (is_user_logged_in()){
$cars = $wpdb->get_results( 
	"
	SELECT post_title, ID
	FROM ak_posts
	WHERE post_type = 'post' 
    AND post_status = 'publish'
    ORDER BY post_title
	"
);
$cars_list = $wpdb->get_results( 
	"
	SELECT post_name, ID
	FROM ak_posts
	WHERE post_type = 'post' 
    AND post_status = 'publish'
    ORDER BY post_title
	"
);
 foreach ( $cars_list as $list ) {
   
        
            echo $list->post_name;
        echo '<br>';
 }

echo '<table style="width:100%; margin-top:25px;">'; ?>
<tr>
<th class="seo-item" style="width:30px; text-align:center;">ID</th>
<th class="seo-item" style="width:150px; text-align:center;">Name</th>
<th class="seo-item" style="width:110px; text-align:center;">Link</th>
<th class="seo-item" style="width:150px; text-align:center;">Title</th>
<th class="seo-item" style="width:150px; text-align:center;">Description</th>
<th></th>
</tr>

<?php foreach ( $cars as $car ) {
    echo '<tr class="seo-row">';
        echo '<td class="seo-item" style="width:30px; text-align:center;">';
            echo $car->ID;
        echo '</td>';


        echo '<td class="seo-item" style="width:150px">';
            echo $car->post_title;
        echo '</td>';

        $meta = $wpdb->get_results( 
            "
            SELECT title, description, permalink
            FROM ak_yoast_indexable
            WHERE object_id = $car->ID 
            AND object_sub_type = 'post'
            AND object_type = 'post'
            "
        );
        foreach ( $meta as $meta_item ){ ?>
            <td class="seo-item" style="width:110px; text-align:center;">
              <a href="<?php echo $meta_item->permalink; ?>" target="blank"><?php echo $meta_item->permalink; ?></a> 
             </td>
             <td class="seo-item" style="width:150px; text-align:center;">
                <input type="text" name="title" id="t<?php echo $car->ID; ?>" value="<?php echo $meta_item->title; ?>">
             </td>
             
             <td class="seo-item" style="width:150px; text-align:center;">
                <input type="text" name="descr" id="d<?php echo $car->ID; ?>" value="<?php echo $meta_item->description; ?>">  
             </td>
             <td class="seo-item" style="width:50px; text-align:center;"> <a href="#" class="update" data-update="<?php echo $car->ID; ?>">Изменить</a></td>
        <?}
    echo '</tr>';
}
echo '</table>'; ?>

</div>
<?php } ?>


<?php get_footer(); ?>