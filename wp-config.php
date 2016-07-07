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
define('DB_NAME', 'hotelMarbella');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'usrHotelMarbella');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'rosadocardenas');

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
define('AUTH_KEY', 'M_4jxp{!?rASDf2h7N98MS$m>?.<fh)XLdQ.Q*yDNKv|%M|^@tFKzku:8:XG.t.T');
define('SECURE_AUTH_KEY', 'oe_BJ(vLzxC{q=Jq/81ci;? n}&UV[`Mkrr$sg+Y27f}w`Nt{^j(c5Rey+ O.x%{');
define('LOGGED_IN_KEY', '$^0tz[d5%:cC.PiVj&K?ZP7P@xJ6OuwukBiZV7]65SfGnkFx6&}}/|C&OkTgVR=v');
define('NONCE_KEY', 'ZM@6|@1OEJN96<Bytao=T|-ro;$^)S Vs,_!uN@VdE2fAKXrw>=HUZ{vS;8m/Gad');
define('AUTH_SALT', '=RPJ3?.=]}-.1sW]qCTyp+&t+/A|-$vPa.O8RN]#:/&3lk6u2N0Aeg9Y:wEKF0;M');
define('SECURE_AUTH_SALT', 'I(G`.8UIGA6;NrhhIPw3~GAMch{{wlqrp+p]UR^*r>6Nkc:gPc9~{!f@fkH/ZJIO');
define('LOGGED_IN_SALT', 'ci;S ><98~+ $[-hXV4U])p(.!}IXKk8 QXGws-@Kkb~9{vf_p>I)rXfUQ-.)+p_');
define('NONCE_SALT', 'O/> ck|7)vX{8PFkU[sL9vm)=+/`g)CS3g s(H_ @sn>Zl#7*-42wsQR#zs.BJd~');

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

