<?php
	error_reporting(E_ALL); @ini_set('display_errors', true);
	$pages = array(
		'0'	=> array('id' => '16', 'alias' => 'Categorías', 'file' => '16.php'),
		'1'	=> array('id' => '19', 'alias' => 'Inscripción', 'file' => '19.php'),
		'2'	=> array('id' => '15', 'alias' => 'Cronograma', 'file' => '15.php'),
		'3'	=> array('id' => '13', 'alias' => 'Contacto', 'file' => '13.php'),
		'4'	=> array('id' => '14', 'alias' => 'Más-Actividades', 'file' => '14.php'),
		'5'	=> array('id' => '1', 'alias' => 'Inicio', 'file' => '1.php'),
		'6'	=> array('id' => '5', 'alias' => 'Reglamentos', 'file' => '5.php'),
		'7'	=> array('id' => '6', 'alias' => 'Registro', 'file' => '6.php'),
		'8'	=> array('id' => '10', 'alias' => 'Patrocinadores', 'file' => '10.php'),
		'9'	=> array('id' => '2', 'alias' => 'Sobre-nosotros', 'file' => '2.php'),
		'10'	=> array('id' => '3', 'alias' => 'Contáctenos', 'file' => '3.php'),
		'11'	=> array('id' => '4', 'alias' => 'Construcción', 'file' => '4.php'),
		'12'	=> array('id' => '7', 'alias' => 'Versiones-anteriores', 'file' => '7.php'),
		'13'	=> array('id' => '8', 'alias' => 'Construcción-de-Órtesis', 'file' => '8.php'),
		'14'	=> array('id' => '9', 'alias' => 'Principiantes', 'file' => '9.php'),
		'15'	=> array('id' => '12', 'alias' => 'Competencias-Adicionales', 'file' => '12.php'),
		'16'	=> array('id' => '17', 'alias' => 'Nuevo-ítem-1', 'file' => '17.php'),
		'17'	=> array('id' => '18', 'alias' => 'Nuevo-ítem-2', 'file' => '18.php')
	);
	$forms = array(
		'3'	=> array(
			'e51a4037' => Array( 'email' => 'mediosceimtun@gmail.com', 'emailFrom' => '', 'subject' => 'Duda desde webpage', 'sentMessage' => 'Hemos recibido tu solicitud, en breve nos comunicaremos contigo.', 'object' => '', 'objectRenderer' => '', 'loggingHandler' => '', 'smtpEnable' => false, 'smtpHost' => null, 'smtpPort' => null, 'smtpEncryption' => null, 'smtpUsername' => null, 'smtpPassword' => null, 'recSiteKey' => null, 'recSecretKey' => null, 'fields' => array( array( 'fidx' => '0', 'name' => 'Nombre', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'Email', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Mensaje', 'type' => 'textarea', 'options' => '' ) ) )
		),
		'13'	=> array(
			'a0e08b9d' => Array( 'email' => 'ceimtun@unal.edu.co; jcduenast@unal.edu.co', 'emailFrom' => '', 'subject' => 'Correo ceimtun.hol.es', 'sentMessage' => 'Te responderemos lo más pronto posible.', 'object' => '', 'objectRenderer' => '', 'loggingHandler' => '', 'smtpEnable' => false, 'smtpHost' => null, 'smtpPort' => null, 'smtpEncryption' => null, 'smtpUsername' => null, 'smtpPassword' => null, 'recSiteKey' => null, 'recSecretKey' => null, 'fields' => array( array( 'fidx' => '0', 'name' => 'Name', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Message', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
	$langs = null;
	$def_lang = null;
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$user_domain = 'ceimtun.hol.es';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	list($page_id, $lang, $urlArgs, $route) = parse_uri();
	$user_key = "id6C4plwIEzib92EmLk=";
	$user_hash = "cf7b1b56ae8c8730";
	$comment_callback = "http://uk.zyro.com/es-ES/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	$page = isset($pages[$page_id]) ? $pages[$page_id] : null;
	if ($page && $page['id'] == $home_page && $route) {
		header('Location: '.$base_url.(($lang && $lang != $def_lang) ? ($lang.'/') : ''), true, 301);
	}
	$hr_out = '';
	if (!is_null($page)) {
		handleComments($page['id']);
		if (isset($_POST["wb_form_id"])) handleForms($page['id']);
	}
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $lang => $default) {
					$pageUri = getPageUri($page['id'], $lang);
					$out = str_replace(urlencode('{{lang_'.$lang.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_file = dirname(__FILE__).'/ga_code') && $ga_code = file_get_contents($ga_file)) {
				$ga_out = str_replace('{{ga_code}}', $ga_code, file_get_contents(dirname(__FILE__).'/ga.html'));
			}
			$out = str_replace('{{ga_code}}', $ga_out, $out);
			$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || isset($_SERVER['HTTP_X_HTTPS']) && $_SERVER['HTTP_X_HTTPS'] == 'on') ? 'https' : 'http';
			$out = str_replace('{{base_url}}', $proto.'://'.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost').'/', $out);
			$out = str_replace('{{hr_out}}', $hr_out, $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>