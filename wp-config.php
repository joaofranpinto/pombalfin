<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'pombalfi_wordpress' );


/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );
define('FS_METHOD', 'direct');

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );


/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', '127.0.0.1' );


/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );


/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', ')vI<zr 6}]D.nAJGL[2[!DfZO0e5[lL$4OX=@i{J-}$r5=SiP?TGjM!TuH5RC_QR' );

define( 'SECURE_AUTH_KEY', '^?)+&NMq3W.EP^6YcvCHn*~diMgvC31* X,D_/#& _ND*lf~jU|Snm*4MIv8*Ii9' );

define( 'LOGGED_IN_KEY', 'V?9{wkHWE7BQJ/b~l0=p7IM&)i>% e[nmtp0Edo&}I=Z|)f~FY&5]jRfdC^GBU*A' );

define( 'NONCE_KEY', 'ZqF^;f$kb7fX3w!v V~}I&L VEsGB]dQ?:A_T8}h&iMXP9A%!_eU@%2MwgXs`# R' );

define( 'AUTH_SALT', 'OD*e-;k.O;Z^j8$j;:mr&n?a[?%STaO3vDc0r2;_Gwf)6H:;7uCY9.fPXQ#+.&&Y' );

define( 'SECURE_AUTH_SALT', 'w6ZHC7;sTx0QKVp4E4B)&r64Ae(9ZcdJ,s]1Xz.)NZ%<N Tj08%GU9<xdhWITepl' );

define( 'LOGGED_IN_SALT', '{.K)NTH>PjT)ia?F>a/7j$0ogis2mJ,-IM/RT}e|GMalCt?9y&8BVih/<SSbU>hA' );

define( 'NONCE_SALT', ':QncUvariLXA=`%(YxPNDnSO>>I6Hfly3K%1)-t/QPNJ7p+q?@dQ[`C#O.4#1.Ov' );


/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';


/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );

define( 'WP_HOME', 'https://localhost/Pombalfin' );
define( 'WP_SITEURL', 'https://localhost/Pombalfin' );

