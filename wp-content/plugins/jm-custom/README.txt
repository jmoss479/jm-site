JM Customizations (Plugin)
==========================

What this is
------------
A site-specific plugin scaffold that keeps your custom PHP/CSS/JS out of your theme.
(Hostinger note: MU-plugins are host-managed on some plans, so this uses /plugins instead.)

Install
-------
1) Upload this zip in WP Admin:
   Plugins → Add New → Upload Plugin

2) Activate: "JM Customizations"

Kill switch (fast rollback)
---------------------------
In wp-config.php add:
  define('JM_DISABLE_CUSTOM', true);

Assets
------
Front-end:
  jm-assets/custom.css
  jm-assets/custom.js

Admin:
  jm-assets/admin.css
  jm-assets/admin.js

File order
----------
Files in jm-custom/ load in filename order (00-, 10-, 20-, etc.).
