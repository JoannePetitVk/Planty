<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'h8oK,rd(/Ro0-TK]Xt2VO Bpe<[A=&OpL7:k><*V@EZQtVjur@p^tJ3^E$UtVUrk' );
define( 'SECURE_AUTH_KEY',  'hq!cDhE0-,;B1!BS4*Oziqt+0 HXv)QP}bwtg>B|C):2{oauW`=]^P5=3yq_g.jf' );
define( 'LOGGED_IN_KEY',    'YU-+d`3kB6]UDGsMf7F<W3m@jWY&]DBHr%1jhF0@AAObSXmRvZv##3!.CX;Iv~>T' );
define( 'NONCE_KEY',        'lGHTQ4ex!!i|+g5cnA`k}B*W}a.FJ*vLcJbw`+3V@w wDBT;J5P1c1zn@q5@5>R{' );
define( 'AUTH_SALT',        '/ya=P$,,*}3^ fh+rzxPgd)VLt~35$ofM$Y|xf/2T.[9Kj4C+q[&G;v%v0]l#pag' );
define( 'SECURE_AUTH_SALT', 'ZNvPWc`t0sQybPv).NKEXoC4$vb/[5{%.0ly<6zpe T*U:z+~:}Mj!6IV}.Mx8g$' );
define( 'LOGGED_IN_SALT',   'f5BTGd?nGd6S;0yrFkmWmI^vmEK9$LL_3hVd9hj3psr84|*`%`[{v9BrQ7tv^BC)' );
define( 'NONCE_SALT',       'UD;=MkHD?0=c)r5p9/f.LXN@}5d(.m%B<v`k#cs_#nDY}=J8VY.el.$o/M~6=D}/' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
