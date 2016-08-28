<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_jbeji144j7');

/** MySQL database username */
define('DB_USER', '6wVIfEAWpWv4Uc4');

/** MySQL database password */
define('DB_PASSWORD', '4VW4mbuOxLO9sG6W');

/** MySQL hostname */
define('DB_HOST', 'solomonmaxngcom.globatmysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '}BL=El^bNcrV?!LE|>VSztooQ+*xCmAIVD]XdyyaV%rG^>)rp_}-M!lTANZ{B|ybrJeRsz*szYQkJxMNTe>^w<+yqnvyoSSU>>jv*NMmPtq[O=uQ>m;rGHx@-Q/Q+?Wk');
define('SECURE_AUTH_KEY', 'q{$VOxecaa&gzo&YRO+*i)_CiS}]d+_fX]-me&eQhg%CIe|Qusj*RTTw$AW$g^w&|tctstZo![VF?HQ?ru(Qfz%sNJ*&yUYH>&&Zk[/>LF&|GDUXLp{W-lM/}&yorN=!');
define('LOGGED_IN_KEY', '>S+=DzY/cOjXfEq=fdMjagWx_(a/AD]Kta&PmkxUo>N<$aMt*jCv?h]joPtMh(s?L>^$lczx_mUtGDHHT_iTV%Dv|MxGKYg+JE{y|m]<(TonD=UKj_s<u<{fPHxS+Vlr');
define('NONCE_KEY', 'MT^hVg<@^v]z<rtO@FWcY_ahWv%u^RtxqvY)DXg=KEmhvAu!eK@PtSuf$kqTLp[rC*=HD}{KA-IIgYC=*@tB(q>@AI&/PWZ_H-k!G_e@fjGh|xXSwANu(V{!{vdvavfw');
define('AUTH_SALT', '^K]$)]!gpFK}=<;@M?yL*Uum{<nlPMUednmidwXdm-jv)trXj]?D&}{z*vzDvPiT(n[&/}IQ;;Q</%AgP}FEL@x_Qpj}/do%[T|*Y)DiwJHLGabgY@UEey<GGvK|fTHs');
define('SECURE_AUTH_SALT', 'Xg)W<N;EH[jhR+dTOmmOz?p$(GF<d(d@aOOppNa_=PZIeB=+@SgoiT(;;gfC{>VKK(koS@O/?hWe>I!X-KU@]TQnY%WoLLw/LQA-Vzs|sr{|P*b)dRJ?EwUE@+Z)ifvz');
define('LOGGED_IN_SALT', 'H^/EmI[[|R!QNDU@<J=ptOk!DQdCcOZaJpq_AnFdY!Iwsmain$KZ-t}Dm&|Tc(Se)PKs?YRxYtrP?Y@k{M*O;RvbwYrs]_)LW-IUb(i}pU}|z>TRfhue]o?pvbmowGOn');
define('NONCE_SALT', 'vARkcuWU^dRQLLgdGqHui?w>YLDz>?NS*qAKe*WBO;uf$ZKFiB;)kDkdC<B>vi-zv(+dympD-gfsG<rmAjrj(gLHe(E]jD=Ln*scmxiFxXhIlzE!CpI/cQV]|b/;K*_r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_okfv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
