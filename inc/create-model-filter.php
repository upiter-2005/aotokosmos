<?php 
require($_SERVER['DOCUMENT_ROOT'].'wp-load.php'); 


$termID = $_POST['data'];

$taxonomyName = "category";
$sub_cats = get_categories( array(
    'child_of' => $termID,
    'hide_empty' => 1
) );


foreach ($sub_cats as $child) { ?>
    <a href="#" data-idn="model" data-model="<?php echo $child->term_id; ?>" class="filter-el"><?php echo $child->name; ?></a>
<?php }



