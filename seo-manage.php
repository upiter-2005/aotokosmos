
<?php
// проверка на спам - просто прерываем выполнение кода, при желании можно и сообщение спамерам вывести
// if( isset( $_POST['comment'] ) || isset( $_POST['message'] ) )
// 	exit;
 
// подключаем WP, можно конечно обойтись без этого, но зачем?
require( dirname(__FILE__) . '/wp-load.php');

?>

<style>
    .seo-row{
        display: flex;
        font-size: 13px;
        font-family: 'Roboto', sans-serif;
    }
    .seo-item{
        border-right: 1px solid #666;
        color: #777;
        display: block;
        padding: 3px;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<?php

$wpdb = new wpdb( 'autokosm_2021', '%sD6j47yV)', 'autokosm_2021', 'autokosm.mysql.tools' );

$new_id = 205; 
$new_title = 'Change success!123123';

$wpdb->update( 'ak_yoast_indexable',
	[ 'title' => $new_title, ],
     ['object_id' => $new_id, 'object_type' => 'post', 'object_sub_type' => 'post']
);








$cars = $wpdb->get_results( 
	"
	SELECT post_title, ID
	FROM ak_posts
	WHERE post_type = 'post' 
    AND post_status = 'publish'
	"
);
echo '<table style="width:100%;">'; ?>
<!-- <tr>
<th class="seo-item" style="width:50px; text-align:center;">ID</th>
<th class="seo-item" style="width:170px">Name</th>
<th>Title</th>
<th>Description</th>
</tr> -->

<?php foreach ( $cars as $car ) {
    echo '<tr class="seo-row">';
        echo '<td class="seo-item" style="width:50px; text-align:center;">';
            echo $car->ID;
        echo '</td>';


        echo '<td class="seo-item" style="width:170px">';
            echo $car->post_title;
        echo '</td>';

        $meta = $wpdb->get_results( 
            "
            SELECT title, description
            FROM ak_yoast_indexable
            WHERE object_id = $car->ID 
            AND object_sub_type = 'post'
            AND object_type = 'post'
            "
        );
        foreach ( $meta as $meta_item ){
            echo '<td class="seo-item" style="width:150px; text-align:center;">';
                echo $meta_item->title;
            echo '</td>';
            echo '<td class="seo-item" style="width:150px; text-align:center;">';
                echo $meta_item->description;
            echo '</td>';
        }
    echo '</tr>';
}
echo '</table>';
    //  $wpdb->query("UPDATE ak_yoast_indexable SET title= $new_title WHERE object_id = $new_id");


    //  UPDATE `ak_yoast_indexable` SET `title` = 'Custom!! title' WHERE `ak_yoast_indexable`.`id` = 6037;