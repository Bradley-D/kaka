=== Kaka ===

Contributors: Bradley Davis
Tags: two-columns, right-sidebar, editor-style, custom-background, custom-logo, custom-menu, featured-images, sticky-post, threaded-comments, translation-ready
Requires at least: 4.5
Tested up to: 4.8
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Hi. I'm a responsive WordPress starter theme called 'Kaka'. I try and keep nice and lean so there is less stuff to get in your way and you can build something awesome.

== Description ==

Kaka is a responsive WordPress starter theme that is light, clean and fast. Based on [Underscores](https://underscores.me/) by Automattic combined with the [Responsive Grid System](http://responsive.gs) and [Normalize](https://necolas.github.io/normalize.css).

As a started theme I have a few built in helpers like hooks, SASS and Gulp to get everyone moving quickly. Setting up Gulp will allow you to compile and minify the SASS files as you work, even the editor styles are updated.

Kaka has 30 hooks built into the theme to make it quick to add content and functionality [Hook Reference](https://github.com/Bradley-D/kaka/wiki/Hooks#hooks-in-template-files) with just a few lines of code. This is done using the WordPress core functionality, [add_action()](https://developer.wordpress.org/reference/functions/add_action/) and [remove_action()](https://developer.wordpress.org/reference/functions/remove_action/).

The main navigation uses the standard WordPress menu and is mobile/tablet friendly.... yes even the sub menus.

Feature images are used on post and page content types above that span the full width of the screen.

Page layouts consist of a content area (66% desktop width, 100% mobile width) and sidebar (32% desktop width, 100% mobile width).


== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Where do I find the hooks in the theme =
They are placed in the template files and look like do_action( 'HOOK-NAME' ), you fill find them in the following files:
- header.php
- footer.php
- sidebar.php
- page.php
- template-parts/content-page.php
- single.php
- template-parts/content.php
- archive.php
- index.php

* Please note: archive.php and index.php use the same hooks.

= How do you use the hooks =
I suggest you read the WordPress codex on how to use [add_action()](https://developer.wordpress.org/reference/functions/add_action/) and [remove_action()](https://developer.wordpress.org/reference/functions/remove_action/)

= Does Kaka have documentation about the hooks? =
Yes, there is more information at the [Kaka Wiki](https://github.com/Bradley-D/kaka/wiki)

== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
* Responsive Grid System, http://responsive.gs, Denis Leblanc, [MIT](https://opensource.org/licenses/MIT)

== Changelog ==

= 1.0.0 - June 14 2018 =
* Initial release to the world.

= 0.*.* -  June 12 2018
* Initial top secret build behind the scenes before release.
