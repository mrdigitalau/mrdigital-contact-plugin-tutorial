<?php

if( !defined('ABSPATH') )
{
      die('You cannot be here');
}

function get_plugin_options($name)
{
      return carbon_get_theme_option( $name );
}