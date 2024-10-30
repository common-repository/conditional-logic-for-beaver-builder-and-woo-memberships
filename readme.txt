=== Conditional Logic for Beaver Builder and Woo Memberships ===
Contributors: petergerard
Donate link: https://pgerard.com/
Tags: beaver builder, woocommerce memberships, conditional logic
Requires at least: 5.0
Tested up to: 6.0.3
Stable tag: 1.3
Requires PHP: 7.2.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Simple plugin for Beaver Builder to enable conditional logic based on WooCommerce Membership status

== Description ==

If you use WooCommerce Memberships and Beaver Builder, you will want to use this plugin. It enables you to have blocks that use conditional logic to display different content depending on the visitor's membership status. 

To use:

1. Edit a page in Beaver Builder.
2. Click on a block. 
3. Go to the Advanced tab and choose Conditional Logic from the Display menu.
4. Click Open Conditional Logic Settings
5. Define your rule by selecting "User Membership" and then choose the plan that you are checking.
6. If you just want to check if the user is active or inactive, "is set" will be true for any active status and "is not set" will be false for any active status. You can also create rules by comparing to specific Membership statuses by using "equal" or "not equal".

*Note: if you do not select a Membership Plan, then it will default to looking for a plan with a slug of 'digital' and if it can't find it, the user will always be considered "inactive".*

== Frequently Asked Questions ==

= Is this an official Beaver Builder or WooCommerce Memberships plugin? =

No.

= Is this plugin free? =

Yes, this plugin is free and open-source.

== Screenshots ==

1. Combine rules to check if the user does *not* have any of several statuses.
2. Combine rules with OR to check if the user has *any* of several statuses.

== Changelog ==

= 1.3 =
* Eliminate some php notices

= 1.2 =
* This is the first public version.

== Upgrade Notice ==

= 1.2 =
This is the first public version.