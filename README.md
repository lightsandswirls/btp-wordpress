# btp-wordpress

## Hi! 👋  Here are some things to know about this repo:

### This repo contains files for the WordPress theme only.

The reasons for this are:

- It saves space used by the repo.
- WP Core and plugin file updates are managed through the host and/or WP Admin, and should not be edited directly via code.  The theme is the only thing that should be edited directly.
- Full site backups are managed through the host, so we don't need version control for the entire site.


### Development Best Practices

- Utilize Webpack to compile JS and CSS, with separate build (production) and dev environments.
- Do not use jQuery unless absolutely necessary.
- Do not upload Git files, Webpack files, this README file, /src/ folder, or /node_modules/ folder to the live site server.
- SCSS directory structure should follow the 7-1 pattern, and files should utilize the partial file (underscore) naming convention.  (Also best to use @use and @forward now instead of @import)
- SCSS files should be compiled into a single CSS file, and should be minified for production.
- JS files should be compiled into a single JS file, and should be minified for production.
- Commit files to the repo daily, but do not commit the /node_modules/ folder or package-lock.json file.
- Utilize Git workflow to manage development and production environments, especially when working with a team. (ex: Gitflow)


### WordPress Best Practices

- Remove unnecessary WP default code from the head, such as the emoji script, wlwmanifest link, pingback link, etc. (See /includes/wordpress-cleanup.php)
- Disable file editing from within the WP Admin. (See wp-config.php)
- Organize functions into separate files in the /includes/ folder. (See functions.php)
- Organize reusable sections of templates into separate files in the /partials/ folder.
- Individual page template files should either be prefixed with "page-" or placed in a /templates/ folder to keep them organized.
- Images uploaded to the WP Media Library should be optimized for web use.
- Use Advanced Custom Fields Pro for custom fields and options pages.
- Use custom h1_title() function to set the h1 title for each page, which first looks for a custom field value, and if not found, falls back to the page title.
- Add theme support for title-tag, post-thumbnails, and excerpt.
- Define custom image sizes in the functions.php file.


### Recommended Plugins

#### Theme Functionality
- Advanced Custom Fields Pro
- Classic Editor & Classic Widgets (if not using the block editor; this allows for more control over the site, although ACF has some great integrations with the block editor now)
- Gravity Forms

#### Security & Anti-Spam
- Akismet
- WPS Hide Login
- Limit Login Attempts (Reloaded)
- Google Enterprise Login (for single sign-on), combined with a 2FA method/plugin

#### SEO
- Yoast SEO
- Redirection
- Schema App Structured Data

#### Performance
- Nitropack
    - Alternatives: WP Rocket, WP-Optimize, Autoptimize, etc.

#### Dev Utilities (remove when done using)
- Health Check & Troubleshooting
- WP Migrate DB Pro
- Post Types Order & CMS Tree Page View (can keep these if end user finds them helpful)
- Regenerate Thumbnails