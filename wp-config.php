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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Mv59:*Wp~BBHN4S4,wc<y8x*d$>N>_S?B(S&)J_nFieTK z>_;CKUZGaw kyT6{]' );
define( 'SECURE_AUTH_KEY',  'A0:Q-c;{bK-O7[0SX?A/P}2(hh~C2!t<{%Y:MTkgkQB]fJ$|d8MzW@*IIq0d_q%Q' );
define( 'LOGGED_IN_KEY',    '#59=&0e8 ^FkMGujLo[#*%7f,mrx,eGD%6`cNHI4^u(T}^3J(0gSA#mFm-xBmN3)' );
define( 'NONCE_KEY',        'A}qvc5*/Bv@Lb+5FKUA2lWH$3YF@:G+bC-j|)l%a`W7g^|2*D[9}@-c<dIMgVW {' );
define( 'AUTH_SALT',        '&JC%++~:>L5 )9R.)s_90XS[F`G{UBBHmFyKj5lX0Rmbn&>MQ_$M.8[JPj&T6%E.' );
define( 'SECURE_AUTH_SALT', 'u( ZVn+&t8WUQ=F ) Fpd2-. 5Iy!6K$vm?3/0ly#4NYG$g2>-lOnVb&OcS_Spmx' );
define( 'LOGGED_IN_SALT',   'L5gdZvrO#$ME5b(RM)RE)*,6H]NNCxJ]?z)-.$)4ns+.lr]ELC.Vu+#[%Ax:+A8r' );
define( 'NONCE_SALT',       'KGT9ck,Vk||D+eS(r3XZilc;EX;.%2 D8$aV|INWl:z@?!p6H&rYd89+c>)0@!;P' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
