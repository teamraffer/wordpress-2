<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'raffer');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xt1;|^eUr[O fuZ2.-)S6rx]^?/:+&rT+:m<Ew@_WX&LinbHOZ!/B/jx1Z,;8TL~');
define('SECURE_AUTH_KEY',  'FaSdcJ7F6(%=-T[NVSbdi00XXGPM|(~BOR6Y3x8wF}.M?1*1cOpZZD6_U?$^:MBo');
define('LOGGED_IN_KEY',    '=]PM#yk}4n(ws{deF|oT].y:l>)td;j8=DK(a&<L.?!:cr#R^% 4(]0O[U$TZ<4k');
define('NONCE_KEY',        'cXOGtV%ZBems:wo5UC%XEg8r#[t8tZq[=Coci-w5Cz9i`xgw)&#k18=<Tw)r9%A<');
define('AUTH_SALT',        'I[@UdB#OMr2^{`q(Fn- Dn^|7b}]etKN{^9xAX)qGq}K6$NQmUv3rV{SrA6L-J!o');
define('SECURE_AUTH_SALT', '7Y%h2pIOIBDQ#qnhH8=?mr{LK5}<ztXKIr2rr@Rj9_#%KNb-:.=3)=#2&`Q)|tnq');
define('LOGGED_IN_SALT',   ',JMR(VB3lM>f]avRI:H&OY1!AH(Gduc8aFJabPV{!GYFx;}?8y2|+0Y#WosQ!6x(');
define('NONCE_SALT',       '-r|1~dkgr2AY*rmmw`e)Q&h4%7M+;}/I/;Yq=Ro:m~78_GFfohT$sC[^~@28h$u=');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'lp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');