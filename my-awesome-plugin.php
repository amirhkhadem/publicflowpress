<?
/**
 * Plugin Name: My Awesome Plugin
 * Plugin URI: https://www.myawesomeplugin.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Swapps
 * Author URI: https://swapps.com
 */
define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );
function my_load_module_examples() {
    if ( class_exists( 'FLBuilder' ) ) {
        // Include your custom modules here.
        require_once 'my-awesome-module/my-awesome-module.php';
    }
}
add_action( 'init', 'my_load_module_examples' );
?>