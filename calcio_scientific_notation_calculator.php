<?php
/*
Plugin Name: Scientific Notation Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/scientific-notation-calculator/
Description: Use our free Scientific Notation Calculator to convert numbers to scientific, E-notation, or engineering form. Easily add, subtract, multiply & divide values.
Version: 1.0.0
Author: www.calculator.io / Scientific Notation Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_scientific_notation_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Scientific Notation Calculator by www.calculator.io";

function calcio_scientific_notation_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Scientific Notation Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_scientific_notation_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_scientific_notation_calculator', 'calcio_scientific_notation_calculator_shortcode' );