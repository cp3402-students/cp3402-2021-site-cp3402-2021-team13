Project started with download from Underscores.com for starter theme.  Placed in GitHub repository for version control.
Workload divided between the four team members: site-header, site-footer, site-widget area, site-main (content).

Site Header:
Has 5 components: header_image, header_logo, header_title, header_description, and main-navigation.  
The /inc/custom-header.php is "required" on approx. line180 of the functions.php.  
This file allows customisation in WordPress, here the sizing for the header_image was adjusted to 2000x850 width and height.  
The header_image is displayed only on the homepage (front page), code in header.php approx. line32.  
Style.css controls the appearance, scroll to the bottom of the file to find header styling.  
(Note: The class .site-header includes all 5 components, .site-branding includes logo, title and description, .site-branding_text is just title and description).  
Media queries under the header section of style.css control screen responsiveness for the header.  
The navigation is enqueued in functions.php.  
Styling in style.css under class .main-navigation. 
Attempted navigation.js from TwentySeventeen theme, however this was not realised and a WordPress plugin for the menu was ultimately utilised.
