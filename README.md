# Deploy Test Plugin

This is a boilerplate plugin for WordPress designed to help you get started with your own custom plugin development. This plugin provides a basic structure and some example code to demonstrate how to create a WordPress plugin.

## Features

- Basic plugin structure
- Example code for common plugin functionalities
- Easy to extend and customize
- Example of how to deploy and build the plugin using GitHub Actions
- Includes a manifest.json file and updater class for setting up automatic update releases.

## Installation

To develop a plugin you will need a local development environment with WordPress installed. Checkout my other videos about setting up a local development environment with wordpress. 

1. Navigate to your WordPress plugins directory: `cd /path/to/wordpress/wp-content/plugins` or `cd /path/to/wordpress/web/app/plugins`
2. Clone the repository: `git clone <URL to Code>`
3. Navigate to the plugin directory: `cd deploy-boilerplate`
4. Install dependencies: `composer install`
5. Rename the plugin directory to your desired plugin name
6. Follow the Renaming Guilde Below
7. Activate the plugin in the WordPress admin dashboard
8. Build your own thing. 

## Usage

After activating the plugin, you can start adding your custom code to the plugin files. The boilerplate includes some example code to help you get started.

## Customization

To adapt this boilerplate plugin to your own needs, you will need to make the following changes:

1. **Plugin Folder Name**: Rename the plugin folder to your desired plugin name.
2. **Plugin Name and Description**: Update the plugin name and description in the plugin header comment in the main plugin file `plugin-loader.php`.

2. **Namespace**: Change the namespace and function prefixes to avoid conflicts with other plugins.
    The plugin is currently namespaced to YDTBBP (Your Deploy Test Boilerplate Plugin). You can change this by doing a find and replace in your code editor. 
3. **Text Domain**: Update the text domain for internationalization.
    The plugin is currently using the text domain `ydtb-boilerplate`. Again, you can change this by doing a find and replace in your code editor.
4. **Config File**: All of the plugin configuration is stored in the configuration class located in src/Config/Config.php. You can  update the configuration settings in this file.
    Make sure to update 'plugin-loader.php' to reflect the new loader file name.
    Update the `https://exampleorg.github.io/ydtb-boilerplate/manifest.json` to the location of your github pages mainfest.json file.
    This will be used to check for updates.

Here are a few strings that you can use find/replace to get started:
ydtb-boilerplate : This is the Text-Domain and the plugin slug. You can change this to whatever you like it should be unique across all plugins installed.

ydtb/ydtb-boilerplate
     This is the vendor/slug for the plugin it can be found in the composer.json file.

plugin-loader.php 
     This is the main file that loads the plugin. this file should be renamed to the plugin slug, and should be renamed where it is used in the plugin folder as well. 

%Boilerplate Plugin% 
     This is the name of the plugin in string format. This is used in the admin notice if the vendor directory does not exist.

#boilerplate-plugin#
     this is the slug as it is used in the manifest file. It would be the same as the plugin slug used by wordpress.org if you were to publish the plugin there.

YDTBBP 
     This is the namespace for the plugin.

`<AUTHOR NAME>`
     This is the author name that will be used in the plugin header. This should be your name or your company name.

`<AUTHOR PROFILE>`
     This is the author profile that will be used in the plugin header. This should be your website or your company website.
     It should be a full URL.

`<AUTHOR URI>`
    This is the author URI that will be used in the plugin header. This should be your website or your company website.

`<HOMEPAGE>`
     This is the homepage for the plugin.
     This should be a full URL.

`<ADDED DATE>`
     This is the date that the plugin was added to the repository.

`<DESCRIPTION>`
    This is the description of the plugin. This should be a short description of what the plugin does.

`<MANIFEST_JSON>`
    As an example:
    `https://exampleorg.github.io/ydtb-boilerplate/manifest.json`
    This is the URL to the manifest file that will be used to update the plugin. It shoudld be replaced with the URL to your own manifest file in your github.




## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request.

## License

This plugin is licensed under the [GPLV3 or Later](LICENSE).

## Credits

This boilerplate plugin was created by John Kraczek.
