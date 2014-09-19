=== List Pages at Depth ===
Contributors: husobj
Tags: wp_list_pages, navigation, page parents, breadcrumbs, cms, widget
Donate link: http://www.benhuson.co.uk/donate/
Requires at least: 2.8
Tested up to: 4.0
Stable tag: 1.3.1
License: GPLv2
License URI: http://www.opensource.org/licenses/gpl-license.php

A more powerful version of wp_list_pages() which allows you to specify a start depth - useful for displaying secondary and tertiary navigation seperately from your primary navigation.


== Description ==
A more powerful version of `wp_list_pages()` which allows you to specify a start depth.

This means you can easily display secondary and tertiary navigation seperately from the primary navigation on your site.

The `list_pages_at_depth` function accepts all the same arguments as `wp_list_pages`, but has an additional argument called 'startdepth'. Set this to be 0 to display primary navigation, 1 for secondary navigation etc. If you wanted to display secondary navigation with indented tertiary navigation you can use this in conjunction with the depth argument - simply set startdepth to 1 and depth to 2.

`<?php list_pages_at_depth(array('startdepth' => 1,'depth' => 1)); ?>`

The plugin also includes a widget so you can easily add it to your site.


== Changelog ==

= 1.3.1 =

* Test up to WordPress 4.0
* Adhere to formatting standards and a little bit of code tidying.

= 1.3 =

* Added support for 'ancestors_of' argument.
* Added support for other post types via 'list_pages_at_depth_post_types' filter.
* Widget includes 'widget_pages_args' filter.
* Tested compatibility with WordPress 3.3

= 1.2 =

* Now shows in all circumstances, not just on pages, if the startdepth is set to zero.

= 1.1 =

* Added widget.
* Fixed bug caused by duplicates when finding parent and child pages.

= 1.0 =

* First Release.