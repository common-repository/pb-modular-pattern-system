<?php

	// PARTIAL - USP'S

    //echo $var['usp-amount'];


?>

<div class="uk-container uk-padding-remove-left">
	<div class="uk-grid">

		<?php

			$pbmps_iterator = 1;
			while ($pbmps_iterator <= $var['usp-amount']):

                mps_block($partial,"text","usp-" . $var['usp-amount'], "uk-width-1-1@s uk-width-1-" . $var['usp-amount'] . "@m uk-width-1-" . $var['usp-amount'] . "@l", "div",
				array(
					'template'      => $partial,
					'text'          => $var['usp-content-' . $pbmps_iterator],
					'classes'       => $var['usp-item-class'], //'',
					'tag'           => $var['usp-item-tag'],
					'wrapper'       => 'uk-padding',
					'id'            => ''
                )
			);
			
			$pbmps_iterator++;
			endwhile;


		?>

	</div>
</div>