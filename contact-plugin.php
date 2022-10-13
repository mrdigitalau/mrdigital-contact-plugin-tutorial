<?php
/**
 * 
 * Plugin name: Contact Plugin
 * Description: Plugin for my custom contact form
 * Version: 1.0.0
 * Text Domain: contact-plugin
 * 
 */

if( !defined('ABSPATH') )
{
      die('You cannot be here');
}

if( !class_exists('ContactPlugin') )
{



            class ContactPlugin{


                  public function __construct()
                  {

                        define('MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ));

                        define('MY_PLUGIN_URL', plugin_dir_url( __FILE__ ));

                        require_once(MY_PLUGIN_PATH . '/vendor/autoload.php');

                  }

                  public function initialize()
                  {
                        include_once MY_PLUGIN_PATH . 'includes/utilities.php';

                        include_once MY_PLUGIN_PATH . 'includes/options-page.php';

                        include_once MY_PLUGIN_PATH . 'includes/contact-form.php';
                  }


            }

            $contactPlugin = new ContactPlugin;
            $contactPlugin->initialize();

}