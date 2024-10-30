<?php 

/*

Plugin Name:  Boton de Twittear shortcode

Plugin URI:   http://alojeme.com/twittear/

Description:  Este plugin simplemente le permite agregar el boton oficial de Twitter en sus paginas o mensajes con el codigo abreviado en castellano espanol o español "[twittear]".

Version:      1.0

Author:       Alojeme.com

Author URI:   http://alojeme.com/

*/



function twittear_button_sc() {

		return '<div sytle="margin:5px"><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-lang="es">Tweet</a></div>';

}

add_shortcode('twittear', 'twittear_button_sc');



?>