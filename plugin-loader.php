<?php

/**
 * Plugin Name: YDTB Boilerplate Plugin
 * Plugin URI:  https://yourdigitaltoolbox.com/
 * Description: An example plugin to demonstrate how to create a plugin using composer.
 * Author:      John Kraczek
 * Author URI:  https://yourdigitaltoolbox.com/
 * Version:     0.0.0
 * Text Domain: ydtb-boilerplate
 * Domain Path: /languages/
 * License:     GPLv3 or later (license.txt)
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

// check if the vendor directory exists, and load it if it does
// This is the only check that must be done outside of the composer autoloaded classes.

$autoload = __DIR__ . '/vendor/autoload.php';

if (!file_exists(filename: $autoload)) {
    add_action(hook_name: 'admin_notices', callback: function (): void {
        $message = __(text: 'Test was downloaded from source and has not been built. Please run `composer install` inside the plugin directory <br> OR <br> install a released version of the plugin which will have already been built.', domain: 'ydtb-boilerplate');
        echo '<div class="notice notice-error">';
        echo '<p>' . $message . '</p>';
        echo '</div>';
    });
    return false;
}

require_once $autoload;

use YDTBBP\Plugin;

// Load the plugin
new Plugin();
