<?php

	// STRUCTURAL: TOP-NAV
	// Version: 1.1
    // DO NOT EDIT

	if (!isset($classes)) { $classes = ''; }
	if (!isset($template)) { $template = ''; }
	if (!isset($folder)) { $folder = ''; }
	if (!isset($pbmps_origin)) { $pbmps_origin = ''; }



?>

<nav class="<?php echo $template; ?><?php echo $classes; ?>" id="<?php echo $template; ?>" type="structural">
	<?php mps_structural($pbmps_origin, $template, $folder); ?>
</nav>