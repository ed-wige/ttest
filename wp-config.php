<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ttest' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kD9&r&xN>J>gPksnu/fD{Y*5-6N:./nSS)>2g5Zu2a!rbgu8d,dDsgasfSWqT(bd' );
define( 'SECURE_AUTH_KEY',  'sl|1Ppp?/DHimeR%U*C!CYl1XJWm=?t*r5z*hWbn-!yPa~w&U6L-bq&b%@HDqts-' );
define( 'LOGGED_IN_KEY',    'mtXXkRJI%.5yE;g/uT_xX_@~2OVOFICTBY[_*n$Y1f>(U38:v B_y> 0/R2.3[Nx' );
define( 'NONCE_KEY',        'F%@RnIUK.sdamKq;ZCun3;$4}g4QRu!BhrthXK2;N#:NMX=/)P+6aM5mj,4I_2YJ' );
define( 'AUTH_SALT',        '(z:iiOCb+(;i(p:ANYe<jU5[oM8SNE{RIK}}t4)9=f;D^rk~^bQ;i#`=rc7{csVS' );
define( 'SECURE_AUTH_SALT', 'Z} ?|^<M8T2X0Gly(-_ d]id1:[AeJO/@%cJ1<}eRq>=nv)C%{<%NsjW&u>k/u=}' );
define( 'LOGGED_IN_SALT',   'Fu%z~v(ZlOeNHuRNw{W}1pEbHmK;%)RAiT@#/A.i2rj@Md;$<%_w!PRc|g)lSxe2' );
define( 'NONCE_SALT',       'G>M6X<(BN]ao1^sdzxIq8vAxZ0T^<O8hb1<gJ7.g Pnw_lP<d0<<9g}4B3-6A{G-' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
