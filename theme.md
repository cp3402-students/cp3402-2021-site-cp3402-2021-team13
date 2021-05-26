<h1>Theme</h1>


<p> Project started with download from Underscores.com for starter theme.  Placed in GitHub repository for version control.
Workload divided between the four team members: site-header, site-footer, site-widget area, site-main (content). </p>

<h3>Site Header:</h3>
<p>Has 5 components: header_image, header_logo, header_title, header_description, and main-navigation. 

The /inc/custom-header.php is "required" on approx. line180 of the functions.php.  

This file allows customisation in WordPress, here the sizing for the header_image was adjusted to 2000x850 width and height.  

The header_image is displayed only on the homepage (front page), code in header.php approx. line32.  

Style.css controls the appearance, scroll to the bottom of the file to find header styling.  

(Note: The class .site-header includes all 5 components, .site-branding includes logo, title and description, .site-branding_text is just title and description).  

Media queries under the header section of style.css control screen responsiveness for the header.  

The navigation is enqueued in functions.php.  

Styling in style.css under class .main-navigation. 

Attempted navigation.js from TwentySeventeen theme, however this was not realised, and a WordPress plugin for the menu was ultimately utilised.

Mobile Version of the Header was coded inside Header.php, mobile-menu-toggle.js, but we opt out of tha method and used a plugin to handle Mobile Menus.</p>

<h3>Site Footer:</h3>
<p>The footer used in this theme incorporates "social-nav" styling that can be found in styles.css. The 'social-menu' is registered under _nav_menus  in 
functions.php. When used in WP backend, this menu is intended to be viewed as a social media menu. This is all stored in 'cp3402-base-theme'.

All other content in the footer is associated to the _s starter theme, and you should relate to their resources if you intend to alter the code.


Note: "back-to-top" is a button that is intended to add functionality of moving the webpage back to the top of the page.
</p>
<h3>Fonts</h3>
<p>In Functions.php in the heading; function cp3402_base_theme_scripts() there have been some changes here.
The changes include; new fonts for the body text, the heading text and bold text text.
The change allows the developer to change the text by changing the link in the scripts to other fonts through google fonts.
</p>
<p>style.css for fonts can be sen if you search for "Typography" you can see the fonts used aswell, but to download new fonts
it needs to be in both Function.php and Style.css to use online fonts.</p>
<h3>Margins/Borders</h3>
<p>For the main borders and margins used to center most of the content in the middle of the webpage the main and aside were
needed to be padded and margined so no content can rest on the edges of the website and make the website feel more easier to read
and look at. To change this, you will need to go into style.css and search for the "/* Elements" heading. Go down to the main and aside
sub-headings and you are able to change the padding.</p>