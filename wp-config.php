<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bassil');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'usbw');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I~--_Aefn>q4eGMqqnLmRK``pb<J_>%;A1t}|6mz52>d2xI B68LgPW|CV}KAb>}');
define('SECURE_AUTH_KEY',  'b|/c3MDM;vpX[aa$MN_Bt4Xb#(foh3`6@dQ4M=f7hmq-UE<)uM^=^$,m)G+piq.P');
define('LOGGED_IN_KEY',    'Kf{`37V+WQ%W9Kd1st-.WVmeuI`h)z&9[%~Nyv=D?pW5ZAt<]AKGm$8_>iiVI6LH');
define('NONCE_KEY',        '$u9Kc^Y8feL6Y,]#q&L|I[D+5Fxr-Ii3FEqLto|^@@Oja}l-RCM}KR+B/N3_BapG');
define('AUTH_SALT',        '|z?R8L5S:UWP+&VLrs&6?^g04&0*u-&@+J27^ioZ5yPBp(h]FGCqXN|-W;--Q{mF');
define('SECURE_AUTH_SALT', '2i*|{+*d9CBYawjRv=lMEDo)h]-5&fpW-s9lJN_|@UKhbFK?+%fld@$m*q{;*e#|');
define('LOGGED_IN_SALT',   'i2Gooztp=}zv?aJ)mHU8`|t.H!tgnC-J1D+hI#%C;*a3m|(Lq$J:WBw}{-9,+$xr');
define('NONCE_SALT',       '?)+o(i@mF_|Nts9+-=c(xq0+@(l3&*d0dx@[@P96>Y`&6z++AN-WPZ$!ut6&lOlQ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
