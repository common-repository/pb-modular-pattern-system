<?php

	// ELEMENT: LINK
	// Version: 1.2

?>

<a <?php echo $pbmps_element_href ?> <?php echo $pbmps_element_target ?> class="<?php echo $pbmps_element_template . '__' . $id . '--' . $type; ?><?php echo $pbmps_element_classes ?>" <?php echo $pbmps_element_id; ?> <?php echo $pbmps_element_title; ?> <?php echo $pbmps_element_type; ?> <?php echo $pbmps_element_attribute; ?>>
    <?php if( $pbmps_element_wrapper != NULL) { ?>
    <<?php echo $pbmps_element_tag; ?> <?php echo $pbmps_element_wrapper; ?>><?php }
        echo $pbmps_element_text;
        if($pbmps_element_wrapper != NULL) { ?>
    </<?php echo $pbmps_element_tag; ?>>
    <?php } ?>
</a>