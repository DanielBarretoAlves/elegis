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
define( 'DB_NAME', 'elegis' );

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
define( 'AUTH_KEY',         '*8Tx>rXH-EVBIFSnUFmtl{2nBS!>emseHL7;:kM3Eg-{:D=+XcPW^me6RN|hx Rz' );
define( 'SECURE_AUTH_KEY',  'c.U69qy7hj>>> zH`[T94lq^,(:;eB-19j.vMtS9c,7[uE?ft8DGQF.d5~yz;SRy' );
define( 'LOGGED_IN_KEY',    'Bf{@L:S.p5.4l:imffEFuQN)*bs-9d}$3aG amPr{ oC0ajDshN<6*]y[8n-WrNN' );
define( 'NONCE_KEY',        '.3C#Pu0.6`BR^C$E!jNfA*DWg)@cGtx#o8V5o=@ YKKA).BCAb2LTijtj.yw^tOV' );
define( 'AUTH_SALT',        ' +}ZB|S9y]u*2OtNDD {er_ Dp2+{5OtP?3typN6SoJx>(f$<U}$E`WKkFo0 L# ' );
define( 'SECURE_AUTH_SALT', '@4@x_W8Zl-HT.TejmQ{C8SL[I3 No1[#p!+,zeKm -2iG1aty;B2*MvqQ))PG34c' );
define( 'LOGGED_IN_SALT',   'N[QVK~zSIbz-_MI-d5?EW{C+d9&B<fGFk9-b2`b~WK2{-B`La$ptV=pKz+>=ZM[X' );
define( 'NONCE_SALT',       'r;wKF|vJ@6RbU0.g{ja&fl| nhCll@JKcau}PCIl0#%XAxb<7G7yEWsFM}cEs%ar' );

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
