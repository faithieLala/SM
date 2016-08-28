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
define('DB_NAME', 'wordpress_mdoceg72k7');

/** MySQL database username */
define('DB_USER', 'cz06HHBCforn4D1');

/** MySQL database password */
define('DB_PASSWORD', 'jqPG80kR5yJnTS0l');

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
define('AUTH_KEY', 'cgFAI>[J{vKb(pQ;p|i*rMM?hEuCEL;{Jj[$$kqvS^B^*FMdj}p&yx}^qhr><}+jFOS$X+PpLGnbRm|L@?!?)AysvxX$pOyh]CGDqqukGhFn-yIo&CFj*te=GEb(%BUV');
define('SECURE_AUTH_KEY', '_c^@TzWRH{oNt?mD[W{kU*s<$TC&?}wRxmqgM[No-ZhlXaJaR+ulGKFswBsw;UDkzWMwcy${vU@(ZlcYGY?z^oVGuwZ<a%O-zthyCB|]yCp>[SW[=Q(&IV%UH/efKljL');
define('LOGGED_IN_KEY', ';+}p]?U[EJ=N-(Qbl*oTeGkuTT=qtCFco-CLE+-*TS}wd;]Beo-?MZfQtZ_ml$GAr=$Mm_sbue<gv%M+j*EbiGwBzrjXp!fiMYJuT%dKJspDJTHhFMkyP&aW%|Q){{JA');
define('NONCE_KEY', '|u>d@[HNVoapf@C|r_vRwKq@LUwqJktpz-)r^|kAaTv}IPzvQx&)H!L&<Bu[)UX*G}*r;w/&[uHyA%Lg$bEI?E&}BgQUG^ph<eA%)vmX-y/QDANHVx$uag//m_}XpP&&');
define('AUTH_SALT', '{HGW%^Bb!;Wc!p|MUo+vkO]/NS=+;yaTXkstUpB^HIqbS&*<@)lpAmBozg-?YVboc$|sACBAIvMaz?cZ!s<s?bpQAZOo@>G[]PZ/xDXvlmHVbcH}w^VPaRYKNkqoJqKf');
define('SECURE_AUTH_SALT', 'M^UgelxnLXLKA(GBb--Wv)-Nk!uz-$M}i%J{jMZGl?bvoQHCyJMtl$WAl%Gx)ZeNX;g^I&(}le<Gz*ptxqhhiA]Xs[Teca&&Fp]yW[$$Vk)g=BZdEKkb$yk@fBYIP?S+');
define('LOGGED_IN_SALT', '$!b&Ju;{SzP&VZV)Zt|p{=?(O}qUfx^WiuQ>QvGL{J[R{JC>rP+K$Ms-sc-!Ds//N|VpeVCeiY@B${gve/[-%+blps%+KE^X&+Y{Wgp|aL^Kdt^bg@}hL(M!TuXoHY>)');
define('NONCE_SALT', 'GfVN/=O}OWydcgS%;eX[Y@)=zhxcvX=m>L?qh$f[JT/P}syHs*|+_z_;TZEH*J=(+Prd-td*b>&JK+kLz+GT+^kCwd<I!w|hWbEbi&zMQmrLX)Hc|%nVgAdM&?)]H_}S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sznw_';

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
