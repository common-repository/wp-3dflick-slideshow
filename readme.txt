=== 3D Flick Slideshow ===

Contributors: wpslideshow.com
Author URI: http://www.galleryslideshows.com/3d-flick-slideshow
Tags: 3d banner rotator, banner rotator, slideshow, 3d slider, wp slider
Requires at least: 3.0
Tested up to: 3.4.1
Stable tag: trunk

Flick Slideshow is a 3d slideshow plugin for wordpress. Just use [flick] to display this slider on your site. You can create categories, bulk upload images under those categories and you can also display specific categories and specific images using their ID's.

== Description ==

Flick Slideshow is a 3d slideshow plugin for wordpress. Just use [flick] to display this slider on your site. You can create categories, bulk upload images under those categories and you can also display specific categories and specific images using their ID's.

**Features**

* Enable disable auto slideshow using "Auto Play"
* The image transition delay time using "Transition Delay"
* The slideshow position using "Slideshow X-Position" and "Slideshow Y-Position"
* Number of slides to be appeared behind the image using "Number of slides behind the image"
* Buttons shape can be set rectangular or circular using "Buttons Shape"
* There are three types of button styles. They can be set through "Buttons Style"
* We can adjust the value "Button Position towards viewer" to increase the depth of buttons for increasing the 3D effect.
* We can adjust the value "Caption text moved towards the views" to increase the depth of captions for increasing the 3D effect.
* Title Position can be set center, right or left using "Title Position parameter"
* It is also possible to turn off the reflection. Also there are two other more reflection types, please try them.
* Another beautiful thing is, you can set the slideshow rotate angle using "Slideshow Rotate Angle Limit".
* It is also possible to hide title by setting "Show Title" parameter to "No"

Many more options available...

Requirements/Restrictions:
-------------------------
 * Works with Wordpress 3.0, WPMU (Wordpress 3.0+ is highly recommended)
 * PHP5 
 
For working demo : http://www.galleryslideshows.com/3d-flick-slideshow

Installation Video: http://www.youtube.com/watch?v=sMqxqhy3byY

== Installation ==

1. Install automatically through the 'Plugins', 'Add New' menu in WordPress, or upload the 'wp_3dflick_slideshow' folder to the '/wp-content/plugins/' directory. 

2. Activate the plugin through the 'Plugins' menu in WordPress. you can find "Flick Slideshow" link  on left side navigation, clilck on it to configure plugin Options. 


= short codes for content =
* <code>[flick]</code> - Use this short code in the content / post to display all images under all categories which are not disabled.

* <code>[flick cats=2,3]</code> - Use this short code in the content / post to display all images under the categories with ID's 2,3.

* <code>[flick imgs=1,2,3]</code> - Use this short code in the content / post to display images which has ID's 1,2,3.

= short codes fot template =
* <code><?php echo do_shortcode('[flick]');?></code> - Use this short code in the template (php file) to display all images under all categories which are not disabled.

* <code><?php echo do_shortcode('[flick cats=2,3]');?></code> - Use this short code in the template (php file) to display all images under the categories with ID's 2,3.

* <code><?php echo do_shortcode('[flick imgs=1,2,3]');?></code> - Use this short code in the template (php file) to display images which has ID's 1,2,3.


* If you have any problems in using this plugin please contact at addons@wpslideshow.com

Working demo: http://www.galleryslideshows.com/3d-flick-slideshow

Installation Video: http://www.youtube.com/watch?v=sMqxqhy3byY



== Screenshots ==

1. screenshot-1.jpg - Slideshow front end. 

2. screenshot-2.gif - Add new album / category.

3. screenshot-3.gif - Edit image.

4. screenshot-4.gif - bulk upload.

5. screenshot-5.gif - edit album / category.

6. screenshot-6.gif - short code to be placed in the content.



== changelog ==
1.0 
released version

1.1
added customization option on slideshow frgments(Slideshow Fragments(2D/3D))

1.2
Fixed : image scaling issue.

2.0
It is completely new built. Supports categories and bulk upload of images. It is not possible to upgrade from your old version to new version. You need to uninstall your old version then install the new version. Plesae do remember to take backup of your old slideshow before you proceed.

2.1
Where ever you place the short code, there only the slider shows. Previously it use to show on top of content.

2.2
Fixed security bugs