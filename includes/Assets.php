<?php
namespace PP;

class Assets {

  public function __construct() {
    add_action('admin_enqueue_scripts', [$this, 'pp_scripts']);
  }


  public function pp_scripts() {
    wp_enqueue_style('pp-plugin-reset', plugins_url('1plugin-playground/assets/css/pp-plugin-reset.css'),  [], '1.0.0', 'all');
  }


}