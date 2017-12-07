<?php
/*
Plugin Name: simplon
Plugin URI: https://simplon.co/
Description: Merci Simplon
Version: 0.1
Author: Deltag
Author URI: 2d4208ba105d4e2285387a76737d5a3f.yatu.ws
License: GPL2
*/
function SimplonShortcode() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'SimplonShortcode');
