# PMP Megaphone

Wordpress theme for showcasing your content along side of PMP content.

![megaphone man](https://upload.wikimedia.org/wikipedia/commons/8/8b/Thomas_H_Ince_-_Megaphone_1922.jpg)

The PMP Megaphone WordPress theme provides a digital megaphone for you to provide journalistic coverage over a specific topic. This theme was a collaboration between the [Public Media Platform](http://publicmediaplatform.org) and [Rocketkoi](http://www.rocketkoi.com) and is provided *as is* under the MIT License.

It is meant to be used with the Public Media Platform Wordpress plugin.

**Table of Contents**  *generated with [DocToc](http://doctoc.herokuapp.com/)*

- [Installation](#)
    - [Install Wordpress](#)
    - [Install PMP Plugin](#)
    - [Install PMP Megaphone Theme](#)
- [Customization](#)
    - [Site Identity](#)
        - [Site Title](#)
        - [Site Tagline](#)
        - [Site Icon](#)
    - [Station Identity](#)
        - [Station Logo](#)
        - [Station URL](#)
        - [Station Call Letters](#)
    - [Site Colors](#)
    - [Site Fonts](#)
    - [Header Image](#)
- [Setup Widgets](#)
    - [Remove Default Widgets from Sidebars](#)
    - [Add Search to Primary Navigation](#)
    - [Setup Primary Sidebar (shown on most pages on the website)](#)
        - [Add Supported By Widget](#)
        - [Add Recent Posts Widget](#)
    - [Setup Tertiary Sidebar (found to right of comments on Article pages)](#)
        - [Add Recent Comments Widget](#)
    - [Setup Archive Sidebar (found on article archive pages)](#)
        - [Add Categories Widget](#)
    - [Setup Footer Widgets](#)
            - [Add About Content to Footer](#)
            - [Add Article Categories to Footer](#)
            - [Add Supported by to Footer](#)
- [Add Underwriting Promos](#)
    - [Add a Provider Supplied Javascript Code Block](#)
    - [Add a Widget](#)
- [Populating Content](#)
    - [Set up Article Categories](#)
    - [Import Articles from the PMP](#)
        - [Search and Select](#)
        - [Categorizing PMP powered articles](#)
    - [Set up Homepage](#)
    - [Set up Articles Listing Page](#)
    - [Have Content Populate the Homepage and Articles page.](#)
        - [Add Specific Categories to Homepage](#)
        - [Feature an article on the homepage](#)
- [Setup Menus](#)
        - [Primary Menu (found in Header)](#)
        - [Secondary Menu (found in Footer)](#)
- [Add Google Analytics](#)
- [Advanced](#)
    - [Compass & Sass](#)
    - [General Clean Up](#)
    - [SEO](#)
    - [If Jquery or CSS doesn’t load in the admin.](#)
- [Resources Used](#)

# Installation

## Install Wordpress

* Download and unpack WordPress zip in to your directory.

    * [https://wordpress.org/download/](https://wordpress.org/download/)

## Install PMP Plugin

* Login in to Wordpress using your username and password.

* In the menu on the left navigate to Plugins > Add New

* Search for ‘Public Media Platform’ in the Search Box on the top right.

* When you get the ‘Public Media Platform’ in the results select ‘Install.’

* Activate the plugin.

* Follow instructions found here to set up the plugin: [https://github.com/publicmediaplatform/pmp-wordpress#settings](https://github.com/publicmediaplatform/pmp-wordpress#settings)

## Install PMP Megaphone Theme

* Download the zip file: [https://github.com/publicmediaplatform/pmp-megaphone/archive/master.zip](https://github.com/publicmediaplatform/pmp-megaphone/archive/master.zip)

* Go to Appearance > Themes

* Press Add New

* Press Upload Theme

* Navigation to where you downloaded the zip file and select it.

# Customization

## Site Identity

Navigate to Appearance > Customizer > Site Identity

### Site Title

This is the name of your website. It appears in the Masthead. If you use Header Image, this will be hidden, but will appear in the HTML for SEO purposes.

1. Enter the name of your website in the text field.

### Site Tagline

This is a short description of your website. It is used for SEO purposes only in page titles.

1. Enter the tagline of your website in the text field.

### Site Icon

This is used as a favicon (the small image that appears next to the URL in your browser) and as a bookmark icon by the theme.

1. Press ‘Select File’

2. Either Select a File you’ve already uploaded or Upload a new image.

3. Follow the image cropping instructions.

## Station Identity

This is an area where you can add your station logo, link, and call letters/identity.

Navigate to Appearance > Customizer > Station Identity

### Station Logo

This is used to add your Station’s Logo to the top navigation area.

1. Format your Station’s Logo should be to be 300px wide by 75px tall.

2. Save it as a JPEG, PNG, or GIF.

3. Under Station Logo press ‘Select Image.’

4. Press the ‘Upload Files’ tab.

5. Follow the instructions to upload your formatted Station Logo file.

6. Fill out the Alt Tag and Description of the image in the Media Library.

7. Press ‘Choose Image.’

### Station URL

This is used to link your Station’s logo and Call Letters to your website.

1. Enter your Station’s URL (including http:// or https://) into the text field.

### Station Call Letters

This is used to add your Station link to the footer of the website.

1. Enter your Station’s Call Letters or Name into the text field.

## Site Colors

This area allows you to apply light additional branding via a specific palette to the site.

Navigate to Appearance > Customizer > Site Colors

* **Header Text Color** changes the color of the ‘Masthead’ (where your site title is shown if you are not using an image.)

* **Primary Accent Color** changes the color used for

    * the Footer background

    * Small Borders found throughout the site

    * The background color of the Featured Post found on the homepage.

* **Link Color** changes the color used for:

    * Links

    * Buttons

* **The Text on Accent Color** option can be set to light or dark depending on the brightness of your Primary Accent Color.

## Site Fonts

We’ve selected a few well designed fonts for you to choose from so your content can have a readable, yet unique typography.

Navigate to Appearance > Customizer > Site Fonts

* **Masthead **changes the font of your site title.

* **Display **changes the font of Article Titles and other major headings.

* **Body **changes the font of your body copy.

## Header Image

You may upload a logo or other graphic to act as your site title.

1. Select Add New Image and follow the process to add an image through WordPress.

# Setup Widgets

Navigate to Appearance > Widgets

## Remove Default Widgets from Sidebars

* Drag and drop any widgets within sidebars to left to remove them from widget areas.

## Add Search to Primary Navigation

* Drag ‘Search’ Widget to the ‘Right Nav’ Sidebar.

## Setup Primary Sidebar (shown on most pages on the website)

### Add Supported By Widget

* Drag Text Widget to ‘Primary Sidebar’ area.

* Name widget ‘Supported by’.

* You can paste HTML and text here.

### Add Recent Posts Widget

* Drag Recent Posts Widget to ‘Primary Sidebar’ area.

* Name widget ‘Recent Posts’.

## Setup Tertiary Sidebar (found to right of comments on Article pages)

### Add Recent Comments Widget

* Drag Recent Comments Widget to ‘Tertiary Sidebar’ area.

* Name widget ‘Recent Comments’.

## Setup Archive Sidebar (found on article archive pages)

### Add Categories Widget

* Drag Categories Widget to ‘Archive Sidebar’ area.

* Name widget ‘Categories’.

## Setup Footer Widgets

#### Add About Content to Footer

* Drag Text Widget to ‘Footer Widget 1’ area.

* Name widget ‘About.’

* Enter HTML and Text to give a brief description about the website.

#### Add Article Categories to Footer

* Drag Categories Widget to ‘Footer Wdiget 2’ area.

* Name widget ‘Articles.’

#### Add Supported by to Footer

* Drag Text Widget to ‘Primary Sidebar’ area.

* Name widget ‘Supported by’.

* You can paste HTML and text here.

# Add Underwriting Promos

Underwriting Promos can be added in one of two ways.

## Add a Provider Supplied Javascript Code Block

If you are adding an Underwriter supplied via a provider (such as an Ad Network):

1. Navigate to Appearance > Customizer > Underwriting Block.

2. Add a title for the Underwriting Block (such as ‘Supported by’.)

3. Copy and Paste the Javascript Code supplied via your provider in to ‘Underwriter Code.’

## Add a Widget

You can also add a text widget to the following sidebars and add in static Underwriter information.

* Primary Sidebar

* Front Page Sidebar 1

* Footer Widget 3

# Populating Content

## Set up Article Categories

In order to keep your content organized and have it bubble up to the Homepage, you’ll need to set up some article categories.

It is best to identify primary categories of content before setting up the website as part of your content plan for the coverage of your topic.

1. Navigate to Posts > Categories

2. Add a Category Name (i.e. national)

3. Add a Category Slug (i.e. national)

4. Optional: Add a description

5. Press Add Category

6. Repeat this for all categories. You can always come back and more categories later, but you need at least two to populate the homepage.

## Import Articles from the PMP

### Search and Select

1. Navigate to Public Media Platform > Search

2. Within Search, use keywords to find what you are looking for!

3. Once you have the query you can save it so it’s easy for you to find more relevant articles in the future.

    * You must have categories defined in order to easily save a search.

4. For articles you wish to pull in to your site press ‘create draft.’

5. These articles can now be found in the ‘Posts’ section of your site, but will not be public yet.

### Categorizing PMP powered articles

1. Navigate to Posts

2. Click on any of the posts you’ve pulled in (likely they may be draft, but maybe not!)

3. You can now tag and categorize the post as you see fit.

There are many ways to categorize and pull in content from the PMP. Learn more about the plugin at [https://github.com/publicmediaplatform/pmp-wordpress](https://github.com/publicmediaplatform/pmp-wordpress).

## Set up Homepage

1. Navigate to Pages.

2. Press ‘Add New.’

3. Name the new page ‘Home.’

4. Press ‘Publish.’

## Set up Articles Listing Page

1. Navigate to Pages.

2. Press ‘Add New.’

3. Name the new page ‘Articles.’

4. Press ‘Publish.’

## Have Content Populate the Homepage and Articles page.

1. Navigation to Appearance > Customizer.

2. Select ‘Static Front Page.’

3. Under ‘Front Page Displays’ select ‘A static page.’

4. Under ‘Front page’ select ‘Home’ from the dropdown.

5. Under ‘Posts page’ select ‘Articles’ from the dropdown.

6. Press ‘Save & Publish.’

### Add Specific Categories to Homepage

1. Navigate to Appearance > Homepage Options

2. Select the category from the dropdown that you would like to have appear on the homepage. The homepage can show up to three recent articles from each category.

3. Press ‘Save Changes.’

### Feature an article on the homepage

1. Navigate to Appearance > Posts.

2. Find the post you wish to feature in the large area at the top of the homepage and click on it.

3. Go to ‘Feature this article?’

4. Check yes.

5. Press Update.

6. It will now be in the main area on the homepage! You may feature one article at a time.

# Setup Menus

Navigate to Appearance > Menus

### Primary Menu (found in Header)

1. Be sure you are in the Edit Menu tab.

2. In the ‘Menu Name’ field name the menu ‘Primary Menu.’

3. Press ‘Save Menu.’

4. Add Home Link

    1. Click on ‘Pages’ to the left of ‘Menu Name.’

    2. Click on ‘View All.’

    3. Select ‘Home.’

    4. Press ‘Add to Menu.’

5. Add All Articles Link

    5. Click on ‘Pages’ to the left of ‘Menu Name.’

    6. Click on ‘View All.’

    7. Select ‘Articles.’

    8. Press ‘Add to Menu.’

6. Add Categories to the All Articles Link in the Primary Menu.

    9. Click on Categories to the left of ‘Menu Name.’

    10. Select the Article Categories you wish to have as a drop down in the main navigation.

7. Repeat for any other pages you would like to add to the ‘Primary Menu.’

    11. You can drag and drop the pages you have added to the menu in any order you would like. We recommend having ‘Home’ and ‘All Articles’ always be the first two items in your menu.

8. Select ‘Main Navigation’ from the Theme Locations options under ‘Menu Settings’ at the bottom of the form.

9. Press ‘Save Menu.’

### Secondary Menu (found in Footer)

1. Be sure you are in the Edit Menu tab.

2. After you have made the ‘Primary Menu’ you should have an option at the top of the page that says ‘create a new menu.’ Click it.

3. In the ‘Menu Name’ field name the menu ‘Secondary Menu.’

4. Press ‘Save Menu.’

5. Add the pages you would like in the Secondary Menu to right area of the form.

6. Select ‘Footer Navigation’ from the Theme Locations options under ‘Menu Settings’ at the bottom of the form.

7. Press ‘Save Menu.’

# Add Google Analytics

Navigate to Appearance > Customizer > Scripts

1. Copy and Paste your Google Tracking Code (and any other necessary scripts) to the Header Scripts or Footer Scripts text areas.

    1. The location of the script should depend on the requirements of the code you are adding to pages.

# Advanced

## Compass & Sass

* The PMP Megaphone theme uses Compass and SASS to generate it’s CSS files.

    * Compass: [http://compass-style.org/](http://compass-style.org/)

    * SASS: [http://sass-lang.com/](http://sass-lang.com/)

## General Clean Up

* Make sure you delete any themes you are not using.

* Make sure you delete any plugins you are not using.

## SEO

If you are interested in using SEO for your website (and you should be) we recommend [the Yoast SEO plugin](https://wordpress.org/plugins/wordpress-seo/).

## If Jquery or CSS doesn’t load in the admin.

* Add *define('CONCATENATE_SCRIPTS', false ); *to bottom of wp-config.php style.

# Resources Used

* Built on Underscores Base Theme: [http://underscores.me](http://underscores.me)

* To create the Custom Theme Options in the Customizer: [http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722](http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722)

* To create the Homepage Options Page: [https://www.onedesigns.com/tutorials/how-to-create-a-wordpress-theme-options-page](https://www.onedesigns.com/tutorials/how-to-create-a-wordpress-theme-options-page)

* To optimize Media Queries in SASS: [http://include-media.com/](http://include-media.com/)

* To create responsive navigation: [http://ozzyrodriguez.com/tutorials/genesis/genesis-responsive-menu-2-0/](http://ozzyrodriguez.com/tutorials/genesis/genesis-responsive-menu-2-0/)