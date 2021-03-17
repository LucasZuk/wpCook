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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qO ukQpLG51KCp>Ji#amxA7jS6TFO~!H3P=j, Zz]mB_T=nPvYf~-yI!dh=vq`e=' );
define( 'SECURE_AUTH_KEY',  '$wNth/y1I8owENjvBc=eSQPmnZk].ON%D}@D^~H8he#l{w1:vzp >20RbSB{ZtN7' );
define( 'LOGGED_IN_KEY',    '{I#q(7J#z1ksw<Iv/&,1Y&I8P@55;l@dwsmTx{3L!w=f-$g#3yP AK:IixJ|]}d3' );
define( 'NONCE_KEY',        '}uZ<o/lFVY[Z/TUyihg$D4t3^r_+]I$cu{8byOJ{mck7zEKPX{cPuX Tcm^/Y6OA' );
define( 'AUTH_SALT',        'X.GHSi_X&GtbgGO7(&%+it-[WQKj<}#XL4J1dg@zf}?rP[Gx[AF!/|8LMZbXOXJ*' );
define( 'SECURE_AUTH_SALT', '*rE6 Vr;U&j4[:ksOvdJ}_j+r1iBP8Y-_8.gj7g(<$*80n^xxpodE8Y;-Kw@P3q&' );
define( 'LOGGED_IN_SALT',   'Fxvg1F aWUZ[zNxCf<kdz@*LNS+4xta(/rUDWpen7zIE1Q6q%8} |fo/8k>gP/31' );
define( 'NONCE_SALT',       'u4mj?L+Gyz=y00`7` zFf00ZI4;CL>~wpQMCm-0ZR^>KS.XOYj3m:eD@u3pgb*uc' );
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
