=== Kaka ===

Contributors: Bradley Davis
Tags: blog, photography, portfolio, two-columns, right-sidebar, editor-style, custom-background, custom-logo, custom-menu, featured-images, sticky-post, threaded-comments, custom-header
Requires at least: 4.5
Tested up to: 5.0.0
Stable tag: 1.0.6
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Hi. I'm a responsive WordPress starter theme called 'Kaka'. I try and keep nice and lean so there is less stuff to get in your way and you can build something awesome.

Kaka WordPress Theme, Copyright (C) 2018, Bradley Davis
Kaka is distributed under the terms of the GNU GPL

== Description ==

Kaka is a responsive WordPress starter theme that is light, clean, fast and Gutenberg (WordPress 5.0.0) compatible. Based on [Underscores](https://underscores.me/) by Automattic combined with the [Responsive Grid System](http://responsive.gs) and [Normalize](https://necolas.github.io/normalize.css).

As a starter theme I have a few built in helpers like hooks, SASS and Gulp to get everyone moving quickly. Setting up Gulp will allow you to compile and minify the SASS files as you work, even the editor styles are updated.

Kaka has 30 hooks built into the theme (when used as a arent theme, child themes do not currently inherit the hook) to make it quick to add content and functionality [Hook Reference](https://github.com/Bradley-D/kaka/wiki/Hooks#hooks-in-template-files) with just a few lines of code. This is done using the WordPress core functionality, [add_action()](https://developer.wordpress.org/reference/functions/add_action/) and [remove_action()](https://developer.wordpress.org/reference/functions/remove_action/).

The main navigation uses the standard WordPress menu and is mobile/tablet friendly.... yes even the sub menus.

Feature images are used on post and page content types above that span the full width of the screen.

Page layouts consist of a content area (66% desktop width, 100% mobile width) and sidebar (32% desktop width, 100% mobile width).


== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= What image size do you recommend for the feature image =
Try and use images that are 1500px wide or larger, but keep the file size down or if you use a lossless file type like a png, you might be able to use a smaller image. Experiment!

= Why are my feature images blurry =
The image probably was not wide enough when initially uploaded. Remember the image covers the entire width of the screen so if you upload an image at 1040px and view on a 29 inch monitor, chances are it will be blurry.

= Why can't I see all the feature image =
The feature image (if unmodified) is 300px in height, I suggest the focus point of the image be

= How are the feature image positioned =
The feature image is positioned 50% or centre (vertically) and centre (horizontally) or 50%. Please take this into consideration when cropping your images.

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

Image used in screenshot.png: A photo by Snapwire (https://www.pexels.com/photo/assorted-hot-air-balloons-photo-during-sunset-670061/), licensed under Creative Commons Zero (http://creativecommons.org/publicdomain/zero/1.0/)

== Changelog ==

= 1.0.6 - December 10 2018 =
* Tested on WordPress 5.0.0 without Gutenberg plugin...the world didn't end.
* Gutenberg color patette background extended.
* Gutenberg color patette font color extended.
* Fixed typo in description.
* Description updated regarding theme hooks not working in child theme.
* Description updated regarding Gutenberg compatible.

= 1.0.5 - November 27 2018 =
* Text domain update on Gutenberg theme support.

= 1.0.4 - November 27 2018 =
* Gutenberg support for default block styles.
* Gutenberg support for wide align images.
* Gutenberg support for responsive embedded content.
* Gutenberg support for editor styles.
* Gutenberg support for block font size.
* Gutenberg support for block color palettes.

= 1.0.3 - September 12 2018 =
* No sidebar template added for page and post type.
* Additional FAQs added around feature image size and position.

= 1.0.2 - August 2 2018 =
* Theme review fixes.

= 1.0.1 - June 22 2018 =
* Header tag conditional simplified.

= 1.0.0 - June 14 2018 =
* Initial release to the world.

= 0.*.* -  June 12 2018
* Initial top secret build behind the scenes before release.
