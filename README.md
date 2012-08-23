# pwnRaid #

## Description ##
pwnRaid is an event signup and management tool with the standards of today and the future! This project is currently in heavy development and isn't really production ready yet.

## Requirements ##
* Apache (with mod\_rewrite enabled) is recommended due to the usage of .htaccess, but any web server should work if you can configurate it.
* PHP 5.3 or above **is required** due to the usage of [FuelPHP](http://www.fuelphp.com).
* Theoretically, any database should work - but pwnRaid is developed with MySQL in mind. Visit [php.net](http://www.php.net/manual/en/pdo.drivers.php) for a list of supported drivers.

## Installation ##
1. Download the latest version of pwnRaid (or fork it if you're adventurous).
2. Unzip/Extract the download and move the files to your server.
3. The directory `public` in the source equals your web server's public document directory (i.e. public_html, public, htdocs etc.). Move it's contents to there or a subdirectory of the webroot where you want to use pwnRaid. Note that placing the directory `pwnraid` outside of the public document directory is encouraged for security reasons.
4. Edit the paths in `index.php` to point to user, core, fuel and packages directories if you don't use the standard structure.
5. Set permissions on writable folders manually, or run `php oil refine install`

## Upgrade ##
1. Download the new version of pwnRaid and overwrite your current installation.
2. Verify that the command tool is working by typing `php oil help`.
3. Type `php oil refine migrate` to update your database scheme.

## Troubleshooting ##
### Syntax errors with clean installation ###
	Parse error: syntax error, unexpected T_FUNCTION, expecting ')' in public/index.php on line 9
This happens when running pwnRaid on PHP version prior to 5.3.
### No mod_rewrite support ###
Setting `index_file` to `index.php` in `pwnpaid/core/config/config.php` should allow you to run pwnRaid without mod_rewrite.