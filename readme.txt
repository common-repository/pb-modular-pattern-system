=== PB Modular Pattern System ===
Contributors: patbloom
Tags: blocks, pattern, framework, system, modular, development, rapid, design, advanced, bootstrap, uikit, dry, gutenberg, patterns, sage, advanced, developer
Requires at least: 4.5
Tested up to: 5.4.2
Stable tag: 0.4.5
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

MVC / BEM based elemental and modular development system based on 6 patterns

== Description ==

**The PB Modular Pattern System (MPS)** is a design and development system based on 6 so called ‘patterns’. Patterns can be seen as modular parts (on design and code level) that are assembled to bigger pieces of functional components which still can be updated without the need to rework them in other parts all the time. More about this on [http://web.mps.systems](http://web.mps.systems)

= Features =

* Build a Wordpress website completely modular - bases on 6 Patterns with MVC model approach
* Create advanced re-usable Partials (and components) that can be injected with variables
* Implement MPS in any (existing) template or use the example theme
* Choose from front-end frameworks like UIkit, Bootstrap or WP Gutenberg
* Based on rapid development, BEM and DRY method


== Installation ==

1. Upload the plugin folder to the '/wp-content/plugins/' directory or install the plugin from the WordPress Plugin directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Configure the options under 'Settings > PB Modular Pattern System'.


== Frequently Asked Questions ==

= Will the plugin change code on my website? =

No, the plugin is non-destructive and will only work when activated.

= Is this plugin like a "block builder" theme? =

No, not really - it can be slightly compared with Sage, but less complex, without the "node-modules" and Blade. You can code your own partials and components (in a regular theme or Sage) and re-use them in a very clean and consistent way or load them from the MPS core.

= Do I need to use the example theme? =

No, it's an example to show how Blocks and Partials can be created and whats the folder structure you need to use. But you can use it of course as a starting point!

= Why is the admin section so funky?

Because I like colours and it's possible :)

== Screenshots ==

1. View of the plugin admin settings
2. Code view (in PhpStorm) of core code (Header Image for UIkit 3)
3. Call of (Header Image) Partial in a template (in PhpStorm)

== Changelog ==

= 0.4.5 [2020.07.29] =
* Added: Ability to add attribute to nav-menu items
* Updated: Bootstrap framework to 4.5.0
* Updated: Uikit framework to 3.5.5
* Updated: Plugin version to 0.4.5
* Fixed: Minor PHP 7.4 compatibility issue

= 0.4.4 [2019.08.19] =
* Code cleanup
* Enhanced code consistency

= 0.4.3 [2019.06.30] =
* Added support for Sage 9 Framework (thanks to Insaf)

= 0.4.2 [2019.06.23] =
* Applied WP plugin directory review suggestions

= 0.4.1 [2019.06.18] =
* (De)registered necessary jQuery script calls
* Tested on Wordpress 5.2.2

= 0.4 [2019.06.08] =
* Applied WP plugin directory review suggestions
* Code cleanup

= 0.3.2 [2019.06.07] =
* Initial version submit to WP plugin directory
* Code cleanup
* Added FAQ
* Added Screenshots

= 0.3.1 [2019.06.05] =
* Code cleanup

= 0.3.0 [2019.06.04] =
* First (private) release

= 0.2.0 [2019.05.17] =
* Initial Release