# Composer WordPress Skeleton

This is simply a skeleton repo for a WordPress site, forked from [moritzjacobs](https://github.com/moritzjacobs/Composer-Wordpress-Skeleton) and modified to my needs. Read the original README and use with caution.

## Short guide:
1. Clone this git into your webroot in a folder called `site`:  
`git clone git@github.com:mattii/Composer-Wordpress-Skeleton.git site`
2. Edit `wp-config-development-sample.php` and enter valid db credentials, then rename to `wp-config-development.php`
3. Change the Wordpress table prefix in `wp-config.php` (line 59)
4. `composer install`
5. Copy `index.php` and `.htaccess` from folder `site` to your webroot
6. Change line 4 in this new `index.php` from `require( './core/wp-blog-header.php' );` to `require( './site/core/wp-blog-header.php' );`
7. Surf to `http://mycrazyhostname.dev/admin`
8. Follow install process
9. Update Wordpress via the Dashboard (why you need to do this, I have *no* idea...)


### Differences to ADARTA's version:

* Removed roots
* Renamed `wp-content/` to `site/` and `wp/` to `core/`
* Removed `web.config`
* `wp-config-*.php` support with auto-switching by host name (`local | staging | live`)
* Plugin activation is handled by `mu-plugins/plugin-bootstrap.php`; Plugins are inactive if their root folder/file name starts with an underscore
* Read .gitignore to get an idea about what we're trying to accomplish with git and composer here