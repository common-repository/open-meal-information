=== Open Meal Information ===
Tags: meal, open source, api, food
Requires at least: 3.0
Tested up to: 5.0.3
Stable tag: trunk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

Easy way to enable Open Meal Information. Use the shortcodes [open-meal-information] to enable.


== Description ==
Shortcode `[open-meal-information]` enables a table populated with this weeks meals. Enter the URL to the API in the shortcode. Read more about the Open Meal Information project here: [http://orebrokommun.github.io/Open-Meal-Information/]

= [open-meal-information] =
Add open meal information functionallity to any post or widget with the shortcode
`[open-meal-information src="http://path_to/api.json"]`

With this shortcode a week meal is populated.


**Settings:**

There are some settings to control the search and output.


* **src** Enter the path to the file to search, the file is uploaded through the Media archive as with any other file. Find the URL and enter it in this attribute. Sample: https://skolmaten.se/api/openmeal/v2/meals.json?distributorID=5323089923538944

* **scriptsrc** *Optional.* Enter the path to javascript file. Default is https://orebrokommun.github.io/Open-Meal-Information/js/widget.js.

* **language** *Optional.* Set language. Default to 'sv'.

* **days** *Optional.* Number of days to show. Default 5 days.

* **icalbutton** *Optional.* Set to true to show ical button. Will get iCal-url from API call and has to be styled with class "glyphicon glyphicon-calendar" to show.



== Screenshots ==

1. Output of open-meal-information on page.

== Changelog ==

= 1.0 =
Initial commit.

== Frequently Asked Questions ==


== Installation ==

1. install and activate the plugin on the Plugins page
2. add one of the shortcodes to page or post content
