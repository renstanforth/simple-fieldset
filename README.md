# simple-fieldset

This is a simple Wordpress plugin that renders fieldsets in posts/pages with Font Awesome icons in the legend section.

## Installation

1. Download this project.
2. Move/Copy&Paste `simple-fieldset` folder to the `/wp-content/plugins/` directory of your Wordpress project.
3. Activate the plugin through the 'Plugins' menu in Wordpress admin dashboard.
4. Place simple fieldset shortcode in pages/posts with attributes and content.

## Usage

* Default shortcode: `[simplefieldset][/simplefieldset]`

* With title: `[simplefieldset title="Title"][/simplefieldset]`

* With title and Font Awesome icon: `[simplefieldset title="Title" fa="fa-laptop"][/simplefieldset]`

* With title, Font Awesome icon, and content:  `[simplefieldset title="Title" fa="fa-laptop"]Lorem ipsum dolor sit amet, consectetur adipiscing elit.[/simplefieldset]`
###### [Font Awesome icon tag references can be found here](http://fontawesome.io/icons/)

## Changelog
### Version 1.0
* Basic Functionality - Renders fieldsets with Font Awesome icons.
* Used Wordpress Plugin Boilerplate.