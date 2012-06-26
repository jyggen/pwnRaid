# pwnRaid #

## Description ##
pwnRaid is an event signup and management tool with the standards of today and the future! This project is currently in heavy development and isn't really production ready yet.

## Requirements ##
* Apache (with mod\_rewrite enabled) is recommended due to the usage of .htaccess, but any web server should work if you can configurate it.
* PHP 5.3 or above **is required**.
* Any database driver should work due to the usage of PDO, theoretically. [List of supported drivers](http://www.php.net/manual/en/pdo.drivers.php).

## Installation ##
1. Download the latest version of pwnRaid (or fork it if you're adventurous).
2. Make sure that `public/` is your webroot, you might have to rename it to `public_html/` depending on your host and environment.

## Upgrade ##
1. Download the new version of pwnRaid and overwrite your current installation.
2. Verify that the command tool is working by typing `php oil help`.
3. Type `php oil refine migrate` to update your database scheme.

## Troubleshooting ##
### No mod_rewrite support ###
Setting `index_file` to `index.php` in `fuel/app/config/config.php` should allow you to run pwnRaid without mod_rewrite.