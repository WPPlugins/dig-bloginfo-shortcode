=== Dig Bloginfo Shortcode ===
Contributors: arroba
Tags: bloginfo,shortcode,blog,key,blog,name,url,description
Requires at least: 3.0.1
Tested up to: 4.8
Stable tag: 1.0.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Fetch the blog info data and use it through a shortcode in html or post editor.

== Description ==

Dig Bloginfo Shortcode fetches the blog info data and allows it to be used as a shortcode in html.

= Examples: =

`[bloginfo key='name']`

`[bloginfo key='url']`

`[bloginfo key='description']`

**Where:**

[bloginfo key='name'] will return the 'Blog name'

[bloginfo key='url'] will return 'http://www.example.com'

[bloginfo key='description'] will return 'Blog description'

Or use the shortcode to point directly to images in one of your theme’s folder:

`<img src="[bloginfo key='template_url']/images/logo.jpg" alt="[bloginfo key='name'] logo" />`

= Parameters: =

+ name = Blog name
+ description = Blog description
+ admin_email = 'admin@email.com’
+ url = 'http://example.com/home’
+ wpurl = 'http://example.com/home/wp’
+ stylesheet_directory = 'http://example.com/home/wp/wp-content/themes/child-theme’
+ stylesheet_url = 'http://example.com/home/wp/wp-content/themes/child-theme/style.css’
+ template_directory = 'http://example.com/home/wp/wp-content/themes/parent-theme’
+ template_url = 'http://example.com/home/wp/wp-content/themes/parent-theme’
+ atom_url = 'http://example.com/home/feed/atom’
+ rss2_url = 'http://example.com/home/feed’
+ rss_url = 'http://example.com/home/feed/rss’
+ pingback_url = 'http://example.com/home/wp/xmlrpc.php’
+ rdf_url = 'http://example.com/home/feed/rdf’
+ comments_atom_url = 'http://example.com/home/comments/feed/atom’
+ comments_rss2_url = 'http://example.com/home/comments/feed’
+ charset = UTF-8
+ html_type = text/html
+ language = en-US
+ text_direction = ltd
+ version = 4.6.1

**Complete list of parameters:**

Get a complete list of the blog info parameters in [WordPress bloginfo function reference](https://developer.wordpress.org/reference/functions/bloginfo/)

== Installation ==
The installation is pretty standard:

1. Upload the package contents to to the `/wp-content/plugins/` folder
2. Activate the plugin through the `Plugins` menu in WordPress

There are no additional settings to be made.

== Screenshots ==

1. Plugin’s usage instructions page.
2. Usage in the page or post editor.
3. Result page or post with the blog information fetched.

== Changelog ==

**Version 1.0.3 (released Nov 11, 2016)**

+ Added example screenshots.

**Version 1.0.2 (released Nov 10, 2016)**

+ Updated usage instructions and assets.

**Version 1.0.1 (released Nov 9, 2016)**

+ Created link to plugin options/usage/settings page from plugins list.

**Version 1.0.0 (released Nov 8, 2016)**

+ Initial release.