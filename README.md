Kaka
===

Hi. I'm a starter theme called 'Kaka'. I try and keep nice and lean so there is less stuff to get in your way and you can build something awesome.

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started - Name Change
----------------------------------

I understand, you want to make me your own and call me something different. The first thing you want to do is copy the `kaka` directory and change the name to something else (like `chocolate-cake`), then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'kaka'` (inside single quotations) to capture the text domain.
2. Search for `kaka_` to capture all the function names.
3. Search for `Text Domain: kaka` in `style.css`.
4. Search for <code>&nbsp;kaka</code> (with a space before it) to capture DocBlocks.
5. Search for `kaka-` to capture prefixed handles.

OR

1. Search for: `'kaka'` and replace with: `'chocolate-cake'`
2. Search for: `kaka_` and replace with: `chocolate_cake`
3. Search for: `Text Domain: kaka` and replace with: `Text Domain: chocolate-cake` in `style.css`.
4. Search for: <code>&nbsp;kaka</code> and replace with: <code>&nbsp;Chocolate_Cake</code>
5. Search for: `kaka-` and replace with: `chocolate-cake-`

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `kaka.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

Credits
----------------------------------
- Underscores by Automattic - http://underscores.me/
- Normalize.css by Nicolas Gallagher - https://github.com/necolas/normalize.css
- Responsive Grid System by DENIS LEBLANC - http://responsive.gs
