<?php 
require($_SERVER['DOCUMENT_ROOT'].'wp-load.php'); 


$termID = $_POST['data'];

$taxonomyName = "category";
$sub_cats = get_categories( array(
    'child_of' => $termID,
    'hide_empty' => 1
) );


foreach ($sub_cats as $child) {
    //$term = get_term_by( 'id', $child, $taxonomyName );
    echo '<option value="'. $child->term_id .'">'; ?>
    <?php echo $child->name; ?>
    <?php
    echo '</option>';
}



