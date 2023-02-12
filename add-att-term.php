// Add the attributes although i dont know why the value issn't added here..  
 update_post_meta($product_id, '_product_attributes', array(
'pa_option1' => array(
'name' => 'pa_name',
'value' => $pa_option1,
'position' => 1,
'is_visible' => 1,
'is_taxonomy' => 1
),
'pa_option2' => array(
'name' => 'pa_name2',
'value' => $pa_option2,
'position' => 1,
'is_visible' => 1,
'is_taxonomy' => 1
),
'pa_option3' => array(
'name' => 'pa_name2',
'value' => $pa_option3,
'position' => 1,
'is_visible' => 1,
'is_taxonomy' => 1
)
));

// loop through the attributes and add the right term

$product_id = $product_id;
$attribute_names = array('pa_name', 'pa_name2', 'pa_name3');
$term_ids = array($pa_option2, $pa_option1, $pa_option3);

for ($i=0; $i < count($attribute_names); $i++) { 
  wp_set_object_terms($product_id, $term_ids[$i], $attribute_names[$i], true);
}
