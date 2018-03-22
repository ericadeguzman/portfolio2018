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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hipstev5_0fd' );

/** MySQL database username */
define( 'DB_USER', 'hipstev5_0fd' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A26E8FDCB4i1mx7sp0rl9q5h3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*j6THL%3q}<xz7-5dJD8fRUH-L_Uf0g>Bo/|?wE0(J@ fW4,?=CD4RXKb|`i-5o%');
define('SECURE_AUTH_KEY',  'M<Re_E&,`1s#!b$a`}TuVq)kqs4uV5kB>qq?L:Eh-UPQ$O$z%;{[$$YUFhI|eAYv');
define('LOGGED_IN_KEY',    '9*0K8?!K?P-Y3;G56D`P)xN*0r{j?Qd#E6%|=^krAFx2#l}h2T-:+KGz-++K<2qT');
define('NONCE_KEY',        'S<f},UVv(YEAY[].*d.eM&uZtFASpo3?>wt(XV.^/y+g7m~<Ef]-%:W-d)Rjfrf{');
define('AUTH_SALT',        '#lVs<}Dxvy3XpTqer;Be9rSq+3cx/yi-xOu(.ld.OIv/1t]*EG|FHGuF7+CC+F$G');
define('SECURE_AUTH_SALT', 'bc_N81Jq4kv8;linDRL|{(at<%{/MsWX&}W`>GM+%Z6zFBSzJUE/yxapr9M1tL3b');
define('LOGGED_IN_SALT',   'W|0C||{pra~oN.NO}**J[GIS{+k;|L}ORtA^g)j1<Hq^5CW$6i[V|E3f-D=]sN`M');
define('NONCE_SALT',       '#+/%qxTv?V6*C/(W9/0~Un@=D{viFf-_p^IJ2J/+H]^UP,Y|t(DW~2>r2p4LpsB;');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbbs_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
