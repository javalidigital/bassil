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
define('DB_PASSWORD', 'pumba2012');

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
define('AUTH_KEY',         'N( RW5MMpMn5vYHtz!9~24<po}Ko&VvIu.M1L!8<1ngjTf8G%^ qV.iAnjtf~:}3');
define('SECURE_AUTH_KEY',  'fH*]i,Pfn9t2sXI7lllK>5Q#3f-xTgTT&E*QEOJn9W`WR rugN)O6J.|,eI.syuN');
define('LOGGED_IN_KEY',    '4XR}?$jMQU=~Ca+!QZ4<]]gq!|M|XfWu) ZZLT04/jvDW]5H}tK>jO]Ku)7g+cZN');
define('NONCE_KEY',        'v <ai!DZE>`n=u-r{m9B$;.hSkT8.<q-WF Nz+en9#MhyfB[+vPI%I@|/k=/D+Dr');
define('AUTH_SALT',        'ge)3|d{l;8aCf Vz i_-G,osP&]zh`HRlRfT[CvzdtKDW4m4PO*^p<7o0? K|u0R');
define('SECURE_AUTH_SALT', 'x^xhZ|vdbpvZn%~H;p$gSCuEw7Csz]}_jd|?om7bLT-g-dHQQT>Z^0Q+;mH=y:|p');
define('LOGGED_IN_SALT',   '-a}|VrbI=lDG :][fDb6x;w]~c%{>6OT!%KzfcoDTM2UnmWzqLWB.VP??sYM-I+V');
define('NONCE_SALT',       'jyz]/-Y(l=:&eO]JaiFh{@L7?8x)DKqqw((`-LQodmBhGoi-5N_F^N#W1]*2US`<');

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
