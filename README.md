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

## Project structure:
* index.php
* .htaccess
* site
    - content
        + mu-plugins
        + plugins
        + themes
        + uploads
        + …
    - core (Wordpress)
    - wp-config.php
    - …

### Differences to moritzjacobs's version:

* Renamed `site/` to `content/`
* Changed value of constant `WP_SERVER_ENVIRONMENT` from `local` to `development`. Possible environments:(`development | staging | live`)
* Added mu-plugin `CWS_Disable_Plugins_When_Local_Dev` by [Mark Jaquith](https://github.com/markjaquith) to disable certain plugins in certain environments