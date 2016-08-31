# Installation Instructions

## Uploading the base theme

Upload the parent theme to `/var/www/html/wp-content/themes/north-wp`

## Uploading the child theme

Upload the child theme to
`/var/www/html/wp-content/themes/north-wp-child`

## Activating the theme

Within Wordpress, navigate to `Appearance / Themes` and activate
`north-wp-child`

## Overriding WooCommerce functionality

By default the template `admin-new-order.php` will be overriden automatically.  However, this doesn't work for changes to core files, such as the checkout templates. It is necessary to manually copy the file