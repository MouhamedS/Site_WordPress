<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{;0P%2cW!QoIOc]viHl1j>nuISRvfJ# P5WvD %3`kGoBH6GL6S[R/y)O(&x)-}N');
define('SECURE_AUTH_KEY',  'TF&|`1Xlm@ks--Hwz<P0:arH}ncGH~h=V}Q.C]0SUXh78bs38MpdOiY)}GreYO9H');
define('LOGGED_IN_KEY',    ',d5S(%& d_G?1-{Pi^XV#~Y}O@+|[)Pke{?Y_8+]i/SQWAM-EIse[p-M+tB)yPfA');
define('NONCE_KEY',        'tnP3AfB-vrtOpH]mY6[RV d:y0JUNLT_OB?DPfh;pSWN9<Ekzg,&|%l ijKjp||X');
define('AUTH_SALT',        'L?6ti5BAWf8oy@/F+pJjjtG+$S[kEbvwI~H`a8:8Em=JY^*<ZfobwtJ-^/O@c>TE');
define('SECURE_AUTH_SALT', 'y,76]>XMlKgj>PBs*upu506$`^Ibd+>kGfaR=E1X6)6t}p1lH`T/HHB4ov?S>=l_');
define('LOGGED_IN_SALT',   'p7e09VGqp|Q-y^:zAXx0s>Yokp]Q^nSZP4H~~GVLjWG+21F|gV-!;|=_Ws ?)H+T');
define('NONCE_SALT',       ':,*|<jw;b;`7W+|hn7?RvX4+;3xfM^^]h.2[7uSIY;]Ox,.^%-_5S^@YNR1GAXFC');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');