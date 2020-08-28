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
define( 'AUTH_KEY',         ' +s69ZF*8ewce)|_G <L@Yn/3Bgm=i4Y<xkPBm#7?W3K+KOzasaN{ZBHJ0UIAo:@' );
define( 'SECURE_AUTH_KEY',  '~iMTfV=`x6,E{17dp`OT6,6=Kj|CGmVn,V%W@1eALhN.WBn{(&#P|?}qF@^-)10+' );
define( 'LOGGED_IN_KEY',    ']Dv-d*g}BsD;]-&`LR]dcOU)Mjqqe  qlX>TIin#&g%y3|wV~dqo8&@.?8SDSFlS' );
define( 'NONCE_KEY',        'G<FX`,rE}^wbG)*eY{lOub0}<`c)D`<GNiK%#szRAMwit#H~hIf}Xy8_CiNs0XZ7' );
define( 'AUTH_SALT',        'h*MXO80)`0K&`~B}2q?lC02DGg60uK_sOrhIR`0*Kn^XPL<h,af;)Yt|]1QPq/[@' );
define( 'SECURE_AUTH_SALT', '4YatVb_+n}t`T9KUdo[chfY~f@ie`sDwT$j=CSHJvbj@8aPs5c~!;43n;*u{9Jry' );
define( 'LOGGED_IN_SALT',   'D(vF2:C1SG55GxBGwp@86]g^z@>ztM~~GG3gAv}t+D9oJo?k5ldsvqDhj,=l%J^P' );
define( 'NONCE_SALT',       ':bb$}l-%sy<I>GTz^c}k-p96~H4##H05w|.an>A<e3:L`!KN8)S/a[Vc-yvo;6>@' );

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
