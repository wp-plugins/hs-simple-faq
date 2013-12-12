=== HS Responsive category FAQ ===
Contributors: heliossolutions
Tags: best FAQ plugin,free FAQ plugin, wordpress FAQ, frequently asked question, category, shortcode ,custom CSS Add, Ask, questions, answers, category faq, wordpress faq , responsive faq,responsive faq plugin, jquery accordian faq , css3 accordian faq
Requires at least: 3.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html 
Tested up to: 3.7.2
Stable tag: 1.0

Simple and responsive faq plugin.

== Description ==

HS simple and responsive faq plugin is the simplest wordpress faq plugin. The plugin uses jquery accordian like effect using CSS3, 
it does not require jQuery. So it loads faster. As it uses CSS3.
You can also add your own custom css from backend to change the front view of the plugin.

To display all FAQs on a page. Create a page and add Following Shortcode to your page.

[hs-faq limit="-1"]

Where limit specifies the number of posts to display. -1 will display all the posts.
So if you want to display only 5 FAQs. Then use following shortcode.

[hs-faq limit="5"]

To display  FAQs of a specific category on a page. Add Following Shortcode to your page.

[hs-faq-cat id="14"]

Where 14 is the category ID.

You can also use the shortcode outside the post editor on a custom template.

echo do_shortcode('[hs-faq limit="-1"]');

= Features =

- Add multiple Category.
- Shortcode for Individual Category.
- Accordian Effect using CSS3.
- Responsive Faq.
- Add Your own custom css.


== Installation ==

1. Upload the plugin folder `HS Simple  Faq` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the "Plugins -> Installed 
plugins -> Activate HS Simple Faq" menu in WordPress.
3. Find HS Simple Faq Plugin in -> Admin Menu.
4. For settings "FAQ's" -> "Settings".


== Frequently Asked Questions ==
 =no questions =

== Screenshots ==

1. Add new FAQ
2. Add new FAQ Category
3. Admin settings Page
4. Front side view
4. Front side view after click

== Changelog ==

= 1.0 =
 *Initial launch of the plugin

== Upgrade Notice ==
 = 1.0 =
  This is the first version of the plugin.