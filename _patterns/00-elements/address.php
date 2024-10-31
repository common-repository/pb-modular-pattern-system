<?php

	// ELEMENT: ADDRESS
	// Version: 1.1


	$pbmps_element_address_name =     PbMpsModularElement::pbmps_get_element_address_name($pbmps_element_content["address_name"]);
	$pbmps_element_address_street =   PbMpsModularElement::pbmps_get_element_address_street($pbmps_element_content["address_street"]);
	$pbmps_element_address_postcode = PbMpsModularElement::pbmps_get_element_address_postcode($pbmps_element_content["address_postcode"]);
	$pbmps_element_address_city =     PbMpsModularElement::pbmps_get_element_address_city($pbmps_element_content["address_city"]);
	$pbmps_element_address_country =  PbMpsModularElement::pbmps_get_element_address_country($pbmps_element_content["address_country"]);
	$pbmps_element_address_region =   PbMpsModularElement::pbmps_get_element_address_region($pbmps_element_content["address_region"]);
	$pbmps_element_address_phone =    PbMpsModularElement::pbmps_get_element_address_phone($pbmps_element_content["address_phone"]);
	$pbmps_element_address_fax =      PbMpsModularElement::pbmps_get_element_address_fax($pbmps_element_content["address_fax"]);
	$pbmps_element_address_email =    PbMpsModularElement::pbmps_get_element_address_email($pbmps_element_content["address_email"]);
	$pbmps_element_address_website =  PbMpsModularElement::pbmps_get_element_address_website($pbmps_element_content["address_website"]);

?>

    <address class="<?php echo $pbmps_element_template . '__' . $id; ?><?php echo $pbmps_element_classes ?>" <?php echo $pbmps_element_id; ?> <?php echo $pbmps_element_attribute ?> <?php echo $pbmps_element_type; ?>>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	        <?php if( $pbmps_element_tag != '') { ?>
                <<?php echo $pbmps_element_tag; ?> <?php echo $pbmps_element_wrapper; ?>><?php } ?>

                    <?php if ( $pbmps_element_address_name != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--name'; ?>" itemprop="name"><?php echo $pbmps_element_address_name; ?></span><br><?php } ?>
	                <?php if ( $pbmps_element_address_street != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--address'; ?>" itemprop="streetAddress"><?php echo $pbmps_element_address_street; ?></span><br><?php } ?>
	                <?php if ( $pbmps_element_address_postcode != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--postcode'; ?>" itemprop="postalCode"><?php echo $pbmps_element_address_postcode; ?></span><br><?php } ?>
	                <?php if ( $pbmps_element_address_city != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--locality'; ?>" itemprop="addressLocality"><?php echo $pbmps_element_address_city; ?>, <?php echo $pbmps_element_address_country; ?></span><br><?php } ?>
	                <?php if ( $pbmps_element_address_region != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--region'; ?>" itemprop="addressRegion"><?php echo $pbmps_element_address_region; ?></span><br><?php } ?>

                <?php if($pbmps_element_wrapper != '') { ?>
                </<?php echo $pbmps_element_tag; ?>>
            <?php } ?>

            <?php if( $pbmps_element_tag != '') { ?>
                <<?php echo $pbmps_element_tag; ?> <?php echo $pbmps_element_wrapper; ?>><?php } ?>

                    <?php if ( $pbmps_element_address_phone != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--phone'; ?>" itemprop="telephone"><?php echo $pbmps_element_address_phone; ?></span><br><?php } ?>
                    <?php if ( $pbmps_element_address_fax != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--fax'; ?>" itemprop="faxNumber"><?php echo $pbmps_element_address_fax; ?></span><br><?php } ?>
                    <?php if ( $pbmps_element_address_email != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--email'; ?>" itemprop="email"><?php echo $pbmps_element_address_email; ?></span><br><?php } ?>
                    <?php if ( $pbmps_element_address_website != '' ) { ?><span class="<?php echo $pbmps_element_template . '__' . $id . '--website'; ?>" itemprop="url"><?php echo $pbmps_element_address_website; ?></span><?php } ?>

                    <?php if($pbmps_element_wrapper != '') { ?>
                </<?php echo $pbmps_element_tag; ?>>
            <?php } ?>

        </div>
    </address>
