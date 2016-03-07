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
define('DB_NAME', 'rayhanvc_wordpress47b');

/** MySQL database username */
define('DB_USER', 'rayhanvc_word47b');

/** MySQL database password */
define('DB_PASSWORD', '4Znuu7S3bO0F');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '}-;}wqi^Cnp%%lAwJpU}{GIaeVTRs+fQuinfbkBP]N+U_-qK+w<{+n[cL*kXh=[!^]i%&+P]P{/;EGOvYswq{yHzs{UMU@iLcc@|^R*gZXYCE&%$cV-^p[T$By;|*XOV');
define('SECURE_AUTH_KEY', '}D}ly[UjSvHBmbHHt%gIy^I>MZR^/MhKOUqwhidT=AizjI-Oy@++z_S*}hZ=g!]PRq^(Bnd%;!m?Y>%%|WcpXtJM*!jwTapOAyh}+/L>mL!(vllX&bH_Ssqn]_;+u}Ih');
define('LOGGED_IN_KEY', 'hE]BrXnslK;+@O@jEr|y|U(_*V&>W*wKAM&CV$jsW<K=Nc<m?Rs&>h&_Q;gE[|Lz|}IqHj)gj/;uu*;?NW%yObKh&Wlt@Tv/lC%ODtuAM[nl<hcMti$x**fR/a*h&DAt');
define('NONCE_KEY', 'PFZPHZ$tbtF}_(*)EGE<ZRgO%ifi}Da)N-)%cHQCotZKIJLX)J-Gr+%=A$k/oQft;*rn=FXyQd?Tx+H*Q_qEr$]ziQyu;=[|[TLHzZ!=oNTMyNoRMH>GTU+o%]%VTK(x');
define('AUTH_SALT', 'p>t$flfJINaDino-vkgq)EvRU+Zj]SUsZk}XuF[)jlqZ];c|Q!qLxazqM!/t>HlniI|NLv((>i;byZ(r+S!{yq&&Pwz@OPNgSqtcjapC}b!wYXygzp>/K!gQ-EWIdvw|');
define('SECURE_AUTH_SALT', 'rAo_ETFb?mqz+zg[OS@b{jk[+(Xh*SrP;DthmGzmeV[SrBK|&u{xs&yQ]<Zrx=EGlfj&^wz]A[v[^xD)kN[<o{wwyRrKj%/m--w)aL;lFlHaZx^dVs+(Fvn}QUjbCcU(');
define('LOGGED_IN_SALT', 'gxmF&h*^l^iT}vw)JAoH<MJK/P{yyekBdA/;^Drlulo/pM]fU[B+*<Gt!NeZYGGy<_?If&U%HbLPjv(SVmVEz_sUW/g<zokNeDypajEN[zAOo/IHy/pffsj*=)WC+;Jj');
define('NONCE_SALT', '^aB%Td!eOOBhgh*vE>*xl+%nCh=i&sTh]UQr}MHShf@_WzvTL!a/B;>(XbJveQPWi)@U^wxMRcy]X{(d<t!@Le)z@@UnMm<k!aS|rTvKx$/<LKkjFjpfC-f$/bs>vVuH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_smnk_';

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
 
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
} */
