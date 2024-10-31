<?php

	// TEMPLATE: top-nav
	// Version: 1.0.0

?>


<div class="<?php echo $template; ?> uk-navbar-container bg-white" uk-sticky="bottom: #offset; media: (min-width: 960px)" uk-navbar>
	<div class="<?php echo $template; ?>-wrapper uk-container">

        <?php mps_partial($template, "core", "navigation", "top-nav","div","uk-navbar-nav uk-nav-default uk-visible@m", ""); ?>

        <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <?php mps_partial($template, "core", "navigation", "top-nav","div","uk-nav uk-nav-default", ""); ?>
            </div>
        </div>

	</div>
</div>