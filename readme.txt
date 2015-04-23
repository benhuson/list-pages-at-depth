=== List Pages at Depth ===
Contributors: husobj
Tags: wp_list_pages, navigation, page parents, breadcrumbs, cms, widget
Donate link: http://www.benhuson.co.uk/donate/
Requires at least: 3.5
Tested up to: 4.2
Stable tag: 1.4
License: GPLv2
License URI: http://www.opensource.org/licenses/gpl-license.php

A more powerful version of wp_list_pages() which allows you to specify a start depth.

== Description ==
A more powerful version of `wp_list_pages()` which allows you to specify a start depth.

This means you can easily display secondary and tertiary navigation seperately from the primary navigation on your site.

The `list_pages_at_depth` function accepts all the same arguments as [`wp_list_pages`](http://codex.wordpress.org/Function_Reference/wp_list_pages), but has an additional argument called 'startdepth'. Set this to be 0 to display primary navigation, 1 for secondary navigation etc. If you wanted to display secondary navigation with indented tertiary navigation you can use this in conjunction with the depth argument - simply set startdepth to 1 and depth to 2.

`<?php

list_pages_at_depth( array(
	'startdepth' => 1,
	'depth'      => 1
) );

?>`

The plugin also includes a widget so you can easily add it to your site.

You can contribute and [submit bug issues](https://github.com/benhuson/list-pages-at-depth/issues) on the plugin's [GitHub page](https://github.com/benhuson/list-pages-at-depth).


== Changelog ==

= 1.4 =

* Add selected page classes: current_page_item, current_page_parent, current_page_ancestor.
* Allow list pages to be displayed on pages other than single pages.
* Sanitize widget fields when updating.

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

== Upgrade Notice ==

= 1.4 =
Sanitize widget fields when updating and add selected page classes.
