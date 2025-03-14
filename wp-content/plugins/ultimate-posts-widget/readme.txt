=== Ultimate Posts Widget ===
Contributors: cl272
Donate link: https://sellcodes.com/5U4SICyc
License: MIT
License URI: http://opensource.org/licenses/MIT
Tags: widget, recent posts, custom post types, sticky posts, featured image, post thumbnail, excerpts, category, custom fields, list pages, widget query, microformats, customizable widget,  categories widget, tags widget, excerpt, widget templates, post author, post date, custom query, ultimate posts, comments, orderby, comment count
Requires at least: 3.5
Tested up to: 6.4.3
Stable tag: 2.3.1

The ultimate widget for displaying posts, custom post types or sticky posts with an array of options.

== Description ==

**Try it out on your free dummy site: Click here => [https://tastewp.com/plugins/ultimate-posts-widget](https://demo.tastewp.com/ultimate-posts-widget).**
(this trick works for all plugins in the WP repo - just replace "wordpress" with "tastewp" in the URL)

UPDATE: Plugin ownership changed for this plugin. We are currently evaluating possible enhancements for it. Stay tuned! If you have any suggestions yourself, please let us know in the Support Forum.

Note: This is a **classic widget** type, in order for it to work on the latest version of WordPress you will need [Classic Widgets](https://wordpress.org/plugins/classic-widgets/) plugin installed on your site.

The ultimate widget for displaying posts, custom post types or sticky posts with an array of options to customize the display.

Designed for both the average user and developer, Ultimate Posts Widgets aims to provide flexibility and ease of use for displaying any kinds of posts within your widget areas. An array of widget options are available as well as hooks, filters and custom templates for more advanced customization.

= Options =

* Filter by categories
* Filter by current category
* Filter by tags
* Filter by current tag
* Filter by custom post types
* Filter by sticky posts
* Select number of posts to display
* Display title
* Display publish date/time with custom format options
* Display post author and link
* Display post comment count
* Display excerpt or full content
* Display read more link with custom label
* Display featured image and at any size
* Display post categories
* Display post tags
* Display custom fields
* Add text or HTML before and after posts list
* Add CSS class to widget
* Add widget title link
* Change excerpt length (in words)
* Order by date, title, number of comments, random or a custom field
* Exclude current post from the list

= Documentation =

See the [FAQ tab](https://wordpress.org/plugins/ultimate-posts-widget/faq/) for documentation on custom templates, hooks, common issues, and more.

= Support =

For help please ask in the [Support Forum](http://wordpress.org/support/plugin/ultimate-posts-widget/)

Enjoy this plugin? [Send a tip to support development](https://sellcodes.com/5U4SICyc).

This plugin is part of the Inisev product family - [check out our other products](https://inisev.com).

== Frequently Asked Questions ==

= Filters =

**upw_enqueue_styles** *(boolean)*
Allows changing whether to load the template CSS file(s).

**upw_wp_query_args** *(array)*
Allows changing the WP_Query arguments for the widget.

**upw_custom_template_path** *(string)*
Allows changing the default custom template path.

= Templates =

**legacy**
As of version 2.0.0 we changed the widget HTML markup. For installs prior to 2.0.0 you can use the legacy template to retain the old HTML markup and compatibility.

**standard**
The new standard template as of version 2.0.0. It features better HTML5 markup, improved styling on various themes without the need for custom CSS, and hfeed microformat.

**custom**
As of version 2.0.0 you can now provide your own custom template files. To do this, create a directory named `upw` in your theme and copy a template from the plugin's `templates` directory. Edit as needed.

Then, in the widget settings under the *Display* tab, choose *Custom* from the *Template* drop down. In the *Custom Template Name* field that appears and enter the file name of your template (excluding .php). For example, if your template is named `custom.php` then enter `custom` in the *Custom Template Name* field.

= Images sizes =

*As of version 2.0.0, the plugin no longer supports setting custom image sizes from the widget options panel.*

To change image sizes you can either edit the built-in sizes (thumbnail, medium, and large) or define a custom image size in your theme `functions.php`.

**Edit built-in image sizes:** Go to *Settings > Media* and change the image sizes as desired. Once image sizes are changed you will need to regenerate thumbnails to update any existing images. This can be done with [AJAX Thumbnail Rebuild](https://wordpress.org/plugins/ajax-thumbnail-rebuild/) or [Regenerate Thumbnails](https://wordpress.org/plugins/regenerate-thumbnails/) plugins. Note that this will affect image sizes for the entire site.

**Define a custom image size:** Edit your `functions.php` file and add a new image size with the `add_image_size` function. See the [WordPress codex for documentation](http://codex.wordpress.org/Function_Reference/add_image_size). Once the function is added, your custom size will be available to select from the widget options. Like editing a built-in size, you will need to regenerate thumbnails for existing images.

Example:

`<?php add_image_size( 'my-custom-size', 800, 600, false ); ?>`

= Thumbnail images are not displaying =

*As of version 2.0.0 timthumb is no longer used.*

This plugin uses the [timthumb library](http://www.binarymoon.co.uk/projects/timthumb/) to resize post thumbnails. Please review these requirements and troubleshooting tips if you are having problems displaying thumbnails.

* Right click > view image - If an image isn't loading then this is the first thing you should do. 9 times out of 10 it will tell you what the problem is in an easy to read error message.
* JetPack plugin - There is a known conflict between JetPack's "Photon" component, please disable it for compatibility with timthumb.
* Server requirements - PHP and the GD image library must be installed on your web server. Normally most web servers include them by default.
* Cache permissions - The cache directory `wp-content/plugins/ultimate-posts-widget/cache` should be set to 777 or if that doesn't work, you may find 755 is ok.
* Image sizes - timthumb is configured to only work for images smaller than 1500 x 1500. The plugin and automatically selects the "Large" size from Settings > Media, if it is greater than 1500 x 1500 you will need to reduce the size or modify the configuration in `thumb.php` to support larger image sizes.
* Tilde(~) in url - timthumb has a known issue with this, please use a url without a tilde until a fix is available. [Bug report](https://code.google.com/p/timthumb/issues/detail?id=263)
* Thumbnail images only work with WordPress' native post thumbnail / featured image. Many theme use a custom image field for thumbnails, these are not supported.

**Still stuck?** See [additional troubleshooting tips](http://www.binarymoon.co.uk/2010/11/timthumb-hints-tips/) from the timthumb author.

== Screenshots ==

1. Example with TwentyTwelve theme with the default widget options
2. General options tab
3. Display options tab
4. Filter options tab
5. Order options tab

== Changelog ==

= 2.3.1 =
* [NOTE] Adjusted sanitization for widget fields even further
* [NOTE] Tested up with WordPress 6.4.3

= 2.3.0 =
* [NOTE] Upgraded analyst module to latest version
* [NOTE] Improved sanitization of widget fields
* [NOTE] Tested up with WordPress 6.4.2

= 2.2.9 =
* Resolved issue related to "exclude_current" missing index
* Updated "Try it out" module

= 2.2.8 =
* Fixed incorrect calls to plugins_url
* Updated banner module
* Updated opt-in module
* Tested with WordPress 6.4
* Resolved issues with PHP 8.2

= 2.2.7 =
* Forced "Try it out" module to be disabled by default, user can still enable it manually.

= 2.2.6 =
* Tested with WP 6.3 RC
* Updated all shared modules to their latest versions

= 2.2.5 =
* Tested with WordPress 6.2
* Adjusted old database versions compatibility
* Updated carrousel module

= 2.2.4 =
* Adjusted PHP compatibility

= 2.2.3 =
* Added try it out module

= 2.2.2 =
* Tested up to WordPress 6.1-RC5
* Adjusted carrousel module
* Updated try it out URL in readme to properly setup demo site

= 2.2.1 =
* Tested up to WordPress 6.0
* Tested with PHP 8.1

= 2.2.0 =
* Tested up to WordPress 5.7.1
* Added support for PHP 8
* Updated banner

= 2.1.6 =
* Tested up to WordPress 5.4.2
* Updated Opt-in

= 2.1.5 =
* Tested up to WordPress 5.4.1
* Changed info

= 2.1.4 =
* Plugin has been updated up to WordPress 5.4

= 2.1.3 =
* Hotfixed issue

= 2.1.2 =
* Serval improvements

= 2.1.1 =
* Added possibility to exclude current post from the list
* Tested update WordPress 5.3.3 (beta)+

= 2.1.0 =
* Added possibility for changing custom message when no posts.
* Increased stability of the plugin
* Fixed filtering
* Tested update WordPress 5.3.2+

= 2.0.9 =
* Replaced deprecated code

= 2.0.8 =
* Plugin revival
* Feedback system integrated
* Readme updated

= 2.0.7 =
* Tested update WordPress 4.8

= 2.0.6 =
* Fix PHP notice (thanks @rhyswynne)
* Search custom template both in child theme and in parent (thanks @groucho75)

= 2.0.5 =
* Adds menu order sort by option

= 2.0.4 =
* Updated class constructor for WordPress 4.3 compatibility (thanks @JustB)

= 2.0.3 =
* Adds link to thumbnail images
* Adds option to show all categories, tags, or types for better usability
* Improve spacing and font sizes on some themes for the standard template
* Document adding custom image sizes
* Add option to display full size post thumbnail
* Remove post_class() from legacy template for better backwards compatibility

= 2.0.2 =
* Reverts back to using `widget_title` filter
* Fixes number of posts setting to allow unlimited amounts
* Adds instance and widget ID variables to filters for more control

= 2.0.1 =
* Fixes issue loading multiple widgets on the same page and using the same template
* Adds a default title to the widget for new instances
* Documentation improvements

= 2.0.0 =

* Added a new standard template and custom template support
* Added basic CSS styles for better formatting
* Add hfeed microformat into new standard template
* Improved widget options interface
* Add option to filter by tags or current tag
* Remove timthumb in favor of using built-in WordPress image sizes
* Remove widget "More Button" options
* Change date display options to now accept any custom date formats
* Add before and after posts HTML fields
* Add option for widget CSS class (thanks @avenirer)
* Add option to display comment count
* Set better defaults for newly created widgets
* Various bug fixes and optimizations

*Upgrading from an earlier version?*

* Upgrades from prior to 2.0.0 we retain the "legacy" template for you. To change which template to use, find the "Template" option under the "Display" tab.
* If you used the "More Button", you will need to add in your own HTML into one of the new fields since the more button is now removed.
* If you used custom thumbnail settings you will need to update them. You can now choose from pre-defined sizes available to WordPress. If you need an additional image size please see [how to add image sizes](http://codex.wordpress.org/Function_Reference/add_image_size).
* Date formatting has changed, you will need to update your settings. By default it uses WordPress' date/time options.

= 1.9.0 =

* Adds option to order by custom field (thanks @enekochan)
* Remove "Permalink to:" from link titles (thanks @wirelessgizmo)
* Swedish translation (thanks @brstp)

= 1.8.1 =

* Add content display option

= 1.8 =

* Add custom field display
* Re-organized widget options
* Use proper alt tag for image thumbnails
* Better title attribute for links

= 1.7 =

* Added show author option
* Added class to highlight current post
* Fixed PHP error notices

= 1.6 =

* Added localization support
* Added show post categories option
* Added show post tags option
* Added custom widget title URL option
* Improved filter controls for sticky posts
* Bug fixes

= 1.5.1 =

* Upgrade timthumb to 2.8.11
* Load "Large" size post thumbnails which should eliminate large image errors
* Improved FAQ for thumbnail troubleshooting

= 1.5 =

* Adds crop mode option
* Add show published time option
* Now uses date / time format settings
* Bug fixes

= 1.4.5 =

* Updates screenshot

= 1.4.4 =

* Fixes show_readmore function
* Adds more button link option

= 1.4 =

* Cleaner widget options
* Code refactoring and fixes
* Adds order by option

= 1.3 =

* Sticky posts only now optional

= 1.2 =

* Added post type filter option.
* Code cleanup.
* Better selection mechanism for categories.

= 1.1 =

* Added category filter option.

= 1.0 =

* First release.

== Upgrade Notice ==

= 2.3.1 =
* [NOTE] Adjusted sanitization for widget fields even further
* [NOTE] Tested up with WordPress 6.4.3

== Installation ==

1. Download and extract the zip archive
2. Upload `ultimate-posts-widget` folder to `/wp-content/plugins/`
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Add the widget to a sidebar and configure the options as desired
