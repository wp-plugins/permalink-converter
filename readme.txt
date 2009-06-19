=== Permalink Converter ===
Contributors: businessxpand
Tags: permalink, permalinks, links, posts, pages
Requires at least: 2.7.1
Tested up to: 2.7.1
Stable tag: 0.9

Converts links in your post and pages to their permalink equivalents.

== Description ==

Simple plugin to automatically convert the internal links that are using the default ?p=<your post id number here> into the permalink equivalent.

You can also use the following tag within posts and pages:
[permalink:<your post id number here>]

Examples:
[permalink:1]
would substitute the permalink for post or page id 1.

or

<a href="http://myblog.com/?p=23">My blog post</a>
would become
<a href="http://myblog.com/my-category/my-blog-post/">My blog post</a>


== Installation ==

1. Upload the `permalink-converter` directory to your `/wp-content/plugins/` directory.
1. Activate the plugin through the `Plugins` menu in WordPress.
1. Either type your permalink using the default p=<your post id number here> or [permalink:<your post id number here>]