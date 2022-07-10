<?php 
require($_SERVER['DOCUMENT_ROOT'].'wp-load.php'); 

$wpdb = new wpdb( 'autokosm_2021', '%sD6j47yV)', 'autokosm_2021', 'autokosm.mysql.tools' );

$new_id = $_POST[id];
$new_title = $_POST[title]; 
$new_descr = $_POST[descr]; 
$type = $_POST[type]; 



$wpdb->update( 'ak_yoast_indexable',
	[ 'title' => $new_title, 'description' => $new_descr ],
     ['object_id' => $new_id, 'object_type' => 'term', 'object_sub_type' => $type]
);