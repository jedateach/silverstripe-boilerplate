# SilverStripe Framework App Boilerplate

As of SilverStripe 3.0 developers can now build web applications on the 
SilverStripe Framework without using the CMS module and all the bloat which
comes with using that. 

The framework contains all the functionality you know and love with SilverStripe 
as well as a basic administration interface allowing even basic web applications 
an interface for managing DataObjects and the like.

## Requirements

PHP 5.3+
Git
Composer (http://getcomposer.org/)

## Installation

To start a new project on the boilerplate run the following from your terminal
(unix only) for the automatic install:
	
	curl http://github.com/fullscreeninteractive/silverstripe-framework-app-boilerplate/install | sh

Or you can install manually by performing the steps below:

	git clone git@github.com:fullscreeninteractive/silverstripe-framework-app-boilerplate.git my_app
	cd my_app
	rm -rf .git/
	composer install

## Discussion

### app instead of 'mysite'

Shorter, cleaner, betterer.

### No themes folder.

We prefer not to use the `themes` directory. Keeping templates all in app allows
me to reduce the amount of root folders as well as keep projects tidier. 

Since most framework only apps won't be using different themes, it seems 
redundant to separate templates like that.


## Recommended Modules

Below are modules we use on most framework application projects and have been 
tested without the cms module.

* silverstripe/sqlite3 - for faster unit tests
* silverstripe/googlesitemaps - create a sitemap.xml file for your URLs
