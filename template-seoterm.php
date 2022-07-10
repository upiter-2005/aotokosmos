<?php
/**
 * Template Name: Template SEO term (SEO term)
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
$terms = $wpdb->get_results( 
	"
	SELECT term_id, name
	FROM ak_terms
    ORDER BY name
	"
);
echo '<table style="width:100%; margin-top:25px;">'; ?>
<tr>
<th class="seo-item" style="width:30px; text-align:center;">ID</th>
<th class="seo-item" style="width:150px; text-align:center;">Name</th>
<th class="seo-item" style="width:110px; text-align:center;">Link</th>
<th class="seo-item" style="width:110px; text-align:center;">object_sub_type</th>
<th class="seo-item" style="width:150px; text-align:center;">Title</th>
<th class="seo-item" style="width:150px; text-align:center;">Description</th>
<th></th>
</tr>

<?php foreach ( $terms as $term ) {
    echo '<tr class="seo-row">';
        echo '<td class="seo-item" style="width:30px; text-align:center;">';
            echo $term->term_id;
        echo '</td>';


        echo '<td class="seo-item" style="width:150px">';
            echo $term->name;
        echo '</td>';

        $meta = $wpdb->get_results( 
            "
            SELECT title, description, permalink, object_sub_type
            FROM ak_yoast_indexable
            WHERE object_id = $term->term_id 
            AND object_type = 'term'
            "
        );
        foreach ( $meta as $meta_item ){ ?>
            <td class="seo-item" style="width:110px; text-align:center;">
              <a href="<?php echo $meta_item->permalink; ?>" target="blank"><?php echo $meta_item->permalink; ?></a> 
             </td>
             <td class="seo-item" style="width:110px; text-align:center;">
                <?php echo $meta_item->object_sub_type; ?> 
             </td>
             <td class="seo-item" style="width:150px; text-align:center;">
                <input type="text" name="title" id="t<?php echo $term->term_id; ?>" value="<?php echo $meta_item->title; ?>">
             </td>
             
             <td class="seo-item" style="width:150px; text-align:center;">
                <input type="text" name="descr" id="d<?php echo $term->term_id; ?>" value="<?php echo $meta_item->description; ?>">  
             </td>
             <td class="seo-item" style="width:50px; text-align:center;"> <a href="#" class="update-term" data-type="<?php echo $meta_item->object_sub_type; ?> " data-update="<?php echo $term->term_id; ?>">Изменить</a></td>
        <?}
    echo '</tr>';
}
echo '</table>'; ?>

</div>
<?php } ?>

<?php get_footer(); ?>