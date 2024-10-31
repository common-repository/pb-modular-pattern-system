<?php

    // ELEMENT: IMAGE
    // Version: 1.2

?>

<div <?php echo $pbmps_element_wrapper; ?>>
    <figure class="<?php echo $pbmps_element_template . '__' . $id . '--' . $type; ?> <?php echo $pbmps_element_classes; ?>" <?php echo $pbmps_element_id; ?> <?php echo $pbmps_element_title; ?> <?php echo $pbmps_element_attribute ?> <?php echo $pbmps_element_type; ?>>
        <img <?php echo $pbmps_element_src; ?> <?php echo $pbmps_element_width; ?> <?php echo $pbmps_element_height; ?> <?php echo $pbmps_element_alt; ?> />
        <?php if ( $pbmps_element_caption != '' ) { ?><figcaption><?php echo $pbmps_element_caption; ?></figcaption><?php } ?>
    </figure>
</div>
