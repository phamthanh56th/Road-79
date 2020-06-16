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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'road79_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' k]_!YrHl/%:+~E_Lzl_gs6LS 3!,h Bg2pXJW|+Q5$. ERDoKr5a=:}WGjbV,y<' );
define( 'SECURE_AUTH_KEY',  'L)i9$/{&E.{>i|;=Pn9R7p,*pFM/<#Q@5G.GM$7;r0=Dmeb<qzYm 5_8i4/zHoWP' );
define( 'LOGGED_IN_KEY',    ';CT/g]jM.M!|us?(LVO!i^q?|akY<@/wtN`(*N?BR01cE}T<]}@8u0DC0h=yh{`}' );
define( 'NONCE_KEY',        '$G*h0D%N <=,/zn2T%s(tEH#_(D*%TKvjUZxn6dKpQ >1@K]hlB2?q8)GwJsp))a' );
define( 'AUTH_SALT',        'pRG!L&tx?fkSSS@Vj}93)VL0iR;}u70[goTcPxhSs|KGd8aqU|Un8Y#:TPDhwrqF' );
define( 'SECURE_AUTH_SALT', ';i6thH*>M/un E{r@FKVeqJeQKDToyH0Wh~-jKt&ksDydC}tc@5B/b}4[sQ^5oAB' );
define( 'LOGGED_IN_SALT',   'p qf@(r$AV#JLOo`-I5BSElf})EpRX},z_5cL)@w?1%Mrw O]cPYbD*_n}fW?ZKX' );
define( 'NONCE_SALT',       '&|h}{u1G--:`MlY;`RFu%G*fU>YQTe).!eQ7X]E6%P-kC@gw!Sik,(%!2O5t} =w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
