<?php
/**
 * Libraries includes
 * The $includes array determines the code library included in the theme.
 *
 * PHP version 5
 *
 * @category Template
 * @package  Quai10
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 * @link     https://quai10.org/
 */
$includes = array(
  'vendor/autoload.php',
  'lib/cleanup.php',
  'lib/config.php'
);

foreach ($includes as $inc) {
  include_once locate_template($inc);
}
unset($inc);
