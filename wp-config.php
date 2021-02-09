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
define( 'DB_NAME', 'portfolioenglish' );

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
define( 'AUTH_KEY',         'xr1mZ^O$S}}n0x!-nfjSgJ28Xj@JoFpp;n>3n(ab4q<k,GM6F`)58UY1r:1T Z~T' );
define( 'SECURE_AUTH_KEY',  'K1WFmQp7g))XBx ZZ`2#+ z%HBt#HEE(NV<q5eEs[x2x@M[t *YA;:r))%OC_B6/' );
define( 'LOGGED_IN_KEY',    'e4)bF_8eXG@[)`QS&=zVSlB{KjgR$2a!BOgg5v9=&OZM!H+b=PKd9o>:EX2E>lOA' );
define( 'NONCE_KEY',        'rL&WSJd4XgVd+OXz-)wT?Iyr$%T+]bi(;DnH_Hv%Dnra IDp^iYn:tpA~a+l`,/@' );
define( 'AUTH_SALT',        'GMP!1Wq|VK9jreMg}|ai#~@n8>)6C3uwrQGzEe*@Ucj.>F/:UbJfh_91frh~EU%!' );
define( 'SECURE_AUTH_SALT', 'pIroz$]U]RS.E5V jOEuNwMIbPn=B^-#IN%I5 P3tY~n3YY{+f|`aeXFn 6STX+B' );
define( 'LOGGED_IN_SALT',   '/9^:7w0#@{Sm99904sFPZ0|}oS<nHqN>@tzHtk/Z;x~:[5 ]=S;+g!L/t*$0*dd ' );
define( 'NONCE_SALT',       'DMdc(`yaJwL/l-nH6<sW5srI[8]MG9_M1Wmf(sFMEHEU+khFgXNqL-67][<& #{{' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
