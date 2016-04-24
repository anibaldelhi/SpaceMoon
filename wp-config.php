<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'spacemoon');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '=hNbjr{95V%o8F%`jr_=Le:JljdlP6Z[I}RSik9haR.8_v(a?QnOhve_v1~>sy`4');
define('SECURE_AUTH_KEY', 'jb3+EK!x-s-9KV#H?wCVjMFtaJ~g[=)LNBycih)-.[vVHuA!.},BqJ7NcrX[tUH7');
define('LOGGED_IN_KEY', '`Xp8?3W|9t4:{1(gtGeq<3.(Feny #N/A-/jID4^Si1TG{BD~+i_]tW,~Jd;!4G+');
define('NONCE_KEY', 'Z>X5)s_y.MhDM[Mr71W$$?c3f>^O}f?QEB2mM&SQBkM|hD7/X^-c5/.P9m@![3xF');
define('AUTH_SALT', '@POg9igQOK]J3WG1FB!<x@UtL9wAT%}v&X*)+XIGJOP3G]f*wP^H!pL;lH53r)r=');
define('SECURE_AUTH_SALT', 'M Oo}FAoK~%} 46;#6~nrU=?)QQj_3=+pb>Bx_Lb>Fw210k.t#byl/VvtLQDEkV3');
define('LOGGED_IN_SALT', 'LsfckZn$NK}mZ4kxdN$G~PL9Mtc~x=g4]09394tx^mierMOnAg>O$TXM^a$6+d2m');
define('NONCE_SALT', '=o:Y3qvtO6w*BNA`XilVfvHWCaz2+R@iO@pb7yQPX/IU-HG^2jS)Vm4|8ubJq]zw');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

