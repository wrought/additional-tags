=== Plugin Name ===
Contributors: josh401, aecnu, msenate
Donate link: http://wordpress.org/
Tags: tinymce, additional tags, multisite, multiuser, unfiltered_html, html, filter, iframe, embed
Requires at least: 2.5
Tested up to: 3.5.1
Stable tag: trunk

A simple filter to add accepted elements to the WordPress Editor, TinyMCE, especially for non-super-admin users in multisite.

== Description ==
In Wordpress MultiSite, there is an unfiltered_html capability enabled for Super Admins alone, so inserting HTML tags like the <iframe> is not allowed. This plugin enables such usage based on specifically defined tags and attributes. It it is fairly straight-forward to extend this plugin to include other tags and attributes, simply follow the comma-separated string syntax of: ',tagname[attribute1|attribute2|...|attributeN]'

## CHANGELOG
0.1 Implements basic support for <pre> and <iframe> tags.

== Installation ==

1. Upload to the /wp-content/plugins/ folder on your site
2. In WP-Admin, you should see this plugin listed as an inactive plugin. Click the link to activate it.
