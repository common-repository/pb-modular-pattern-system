<?php

// PARTIAL : COMPONENT - TOP NAV DEFAULT
// Version: 1.0.0

?>


<nav class="<?php echo $partial; ?> uk-navbar-container bg-white" uk-sticky="bottom: #offset; media: (min-width: 960px)" uk-navbar>
	<div class="<?php echo $partial; ?>-wrapper uk-container">
		<?php
            mps_partial($partial, "core", "navigation", "nav-menu","div","uk-navbar-nav uk-nav-default uk-visible@m",
                array(
                    'menu_name'             => "top-nav",
                    'menu_depth'            => 1,
                    'menu_wrapper'          => "top-nav-wrapper uk-container",
                    'container_tag'         => "div",
                    'container_classes'     => "menu-container-class",
                    'theme_location'        => "primary",
                    'menu_items_wrapper'    => "top-nav uk-navbar-nav uk-nav-default",
                    'menu_href_class'       => "nav-link-top",
	                'menu_href_attribute'   => ""
                )
            );
        ?>
		<div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
			<div class="uk-offcanvas-bar">
				<button class="uk-offcanvas-close" type="button" uk-close></button>
				<?php
					mps_partial($partial, "core", "navigation", "nav-menu","div","uk-nav uk-nav-default",
						array(
							'menu_name'             => "top-nav",
							'menu_depth'            => 1,
							'menu_wrapper'          => "top-nav-wrapper uk-container",
							'container_tag'         => "div",
							'container_classes'     => "menu-container-class",
							'theme_location'        => "primary",
							'menu_items_wrapper'    => "top-nav uk-navbar-nav uk-nav-default",
							'menu_href_class'       => "nav-link",
							'menu_href_attribute'   => ""
						)
					);
				?>
			</div>
		</div>
	</div>
</nav>