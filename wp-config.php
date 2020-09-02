<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_rest' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^AQZP!nY-FeSY|.WzR2jj#}uYMFn=`sYR#]avJAOTVISxQ;uA[qZ@#Vi]^d$QvQo' );
define( 'SECURE_AUTH_KEY',  '[LSm;nosRa#Uy3h[L4,#VbKD3?a%n{D4$q&[X7<EzS?-W<}N+]n~9DITxW.aCRf$' );
define( 'LOGGED_IN_KEY',    '2l-`rKuHShzy5DV@1LI:13(f_^|. pdFDJ$lpnK!%L@^/|8%CI/_YDLQ@`Wa98Fm' );
define( 'NONCE_KEY',        '0Q8elyS1y_TO#yf44_B]{HF46%pOUVu]xUlJ2Tbnghv`68!+iJMJ],aSrQ-PzRM|' );
define( 'AUTH_SALT',        '1)za;k>b&9es{;[.tIRv)gA(LPj4N=wOR5|NvANG^vc,cuy:d;3b_f3$HlCfG.I~' );
define( 'SECURE_AUTH_SALT', ':Ve2440@RA-@!LI+.;=jr]9WhMwwFcePdlHro@H_HLsK-4bA;`S4H _r]:8+/$S/' );
define( 'LOGGED_IN_SALT',   '-XrXW-8 o(2OHS+GjDCE=9a..~iCS{EnjOuZ=($n7JlkR-Vu%91QF#)<qaK:e/D3' );
define( 'NONCE_SALT',       'lc?ND&IsTPHf4jyD~ 4.3y{oi!q?}npI1gg2L!Iy,}&B]j5~<JM&ME#I>;ihnjdc' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'rest__db';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD','direct');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
