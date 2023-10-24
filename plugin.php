<?php
/*
Plugin Name: Scientific Notation Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/scientific-notation-calculator/
Description: Scientific notation calculator converts numbers to scientific notation, e-notation, engineering notation, and adds, subtracts, multiplies or divides them.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_scientific_notation_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Scientific Notation Calculator by Calculator.iO";

function display_ci_scientific_notation_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/scientific-notation-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Scientific Notation Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_scientific_notation_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_scientific_notation_calculator', 'display_ci_scientific_notation_calculator' );