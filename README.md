# Donation
Angular App for Donation

###WHAT IT NEEDS TO RUN

* APACHE
* PHP
* MYSQL

You need to/can download WAMP OR XAMP according to your choice.

For WAMPSERVER 2.5
****
1. You can find the WAMP server download link here -> http://www.wampserver.com/en/ 
2. Either extract the code ZIP or git clone in any path you want.

HTTPD.CONF CHANGES
****

* You can find httpd.conf in the folder where apache is installed. In my case it is "C:\wamp\bin\apache\apache2.4.9\conf\" as my wamp is installed in C: Drive.
* Find all "/var/www" in httpd.conf in WAMP and point it to the path wherever this project exists. 
* Uncomment LoadModule rewrite_module modules/mod_rewrite.so in httpd.conf to enable Rewrite engine in .htaccess


###CODEIGNITER CONFIG

1. .htaccess -> Changed to remove index.php from the URL

###IMPLEMENTATION

There is one main URL

1. http://localhost/donation (Your base URL can be different)-> The main donation to App functionality can be obtained here.


###STEPS

1. Just go the above said URL and look into the specifications as asked.

###ASSUMPTIONS

1. "Save for Later" and "Tell your friends" button could have been implemented. But bit unclear as the respective prospect can be vast.
2. Max value for progress bar is 5000 dollars.

###CODE STRUCTURE

BACKEND - CODEIGNITER 2.2.6

FRONTEND- ANGULARJS
****

1. All js files can be obtained under /js/donationApp folder
2. /js/donationApp/views contains "popover" html.
3. angular-ui is used for popover ,tooltip and progressbar.

CSS and FONTS
****

1. All custom css files and google fonts are found under /css and /fonts.

###FUNCTIONALITY

1. Donation Amount is default 50 and minimum 1 dollar.
2. If user doesn't enter any value , default 50 dollars is submitted.
3. Decimal values are taken care of.
4. Validations for non-numeric of alphanumeric characters are done.
5. Progress bar increases on each input of donations. Popover comes up when you hover on the progress bar.
6. When progress bar gets filled, it comes out with a popover "Thank you! for your donation". Rest for the unfilled part it shows the remaining amount left for funding the project.
7. The page is responsive on available devices in Chrome Emulator.
8. Added a tooltip for link "Why give $50?"



