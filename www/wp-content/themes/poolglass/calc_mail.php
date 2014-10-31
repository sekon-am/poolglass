<?php

	// GET PARAMS
	$toMail = $_POST["toMail"];
	$ClientName = $_POST["ClientName"];
	$ClientTell = $_POST["ClientTell"];
	$AQ_TYPE = $_POST["AQ_TYPE"];
	$AQ_FORM = $_POST["AQ_FORM"];
	$AQ_LENGTH = $_POST["AQ_LENGTH"];
	$AQ_HEIGHT = $_POST["AQ_HEIGHT"];
	$AQ_WIDTH = $_POST["AQ_WIDTH"];
	$AQ_WATER_LV = $_POST["AQ_WATER_LV"];
	$AQ_FORM_JOINT = $_POST["AQ_FORM_JOINT"];
	$LiToHtml = '';
	if ( ($AQ_LENGTH != '') && ($AQ_LENGTH != '0') ){ $LiToHtml = '<li>Длинна: <b>'.$AQ_LENGTH.'</b> см</li>'; }
	if ( ($AQ_HEIGHT != '') && ($AQ_HEIGHT != '0') ){ $LiToHtml .= '<li>Высота: <b>'.$AQ_HEIGHT.'</b> см</li>'; }
	if ( ($AQ_WIDTH != '') && ($AQ_WIDTH != '0') ){ $LiToHtml .= '<li>Ширина: <b>'.$AQ_WIDTH.'</b> см</li>'; }
	if ( ($AQ_WATER_LV != '') && ($AQ_WATER_LV != '0') ){ $LiToHtml .= '<li>Уровнь воды: <b>'.$AQ_WATER_LV.'</b> см</li>'; }
	if ( ($AQ_FORM_JOINT != '') && ($AQ_FORM_JOINT != '0') ){ $LiToHtml .= '<li>Форма швов: <b>'.$AQ_FORM_JOINT.'</b></li>'; }

	// SEND MAIL TO MANAGER
	$toManagerMail = 'info@poolglass.ru';
	//$toManagerMail = 'dg@planetaneptuna.ru';
	$subjectClient = 'Заявка на остекление бассейна';
	$subjectManager = 'Заявка на остекление бассейна ('.$ClientName.')';
	$headersManager = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headersManager .= "From: poolglass.ru <calculator@poolglass.ru> \r\n";

	$htmlToClient = '
	<html> 
	    <head> 
	        <title>'.$subjectClient.'</title> 
	    </head>
	    <body> 
	        <h1>Параметры бассейна:</h1>
	        <ul>
	        	<li>Что делаем: <b>'.$AQ_TYPE.'</b></li>
	        	<li>Форма остекления: <b>'.$AQ_FORM.'</b></li>
	        	<li>Параметры бассейна:
			        <ul>'.$LiToHtml.'</ul>
	        	</li>
	        </ul>
	    </body> 
	</html>
	';

	$htmlToManager = '
	<html> 
	    <head> 
	        <title>'.$subjectManager.'</title> 
	    </head>
	    <body> 
	        <h1>Параметры бассейна:</h1>
	        <ul>
	        	<li>Что делаем: <b>'.$AQ_TYPE.'</b></li>
	        	<li>Форма остекления: <b>'.$AQ_FORM.'</b></li>
	        	<li>Параметры бассейна:
			        <ul>'.$LiToHtml.'</ul>
	        	</li>
	        </ul>
	        
	        <h1>Информация о клиенте:</h1>
	        <ul>
	        	<li>E-Mail: <b>'.$toMail.'</b></li>
	        	<li>Имя: <b>'.$ClientName.'</b></li>
	        	<li>Телефон: <b>'.$ClientTell.'</b></li>
	        </ul>
	    </body> 
	</html>
	';

	mail($toMail, $subjectClient, $htmlToClient, $headersManager);
	mail($toManagerMail, $subjectManager, $htmlToManager, $headersManager);

	$stateSendMail = "В ближайшее время с Вами свяжется менеджер.<br>На указанный адрес <b>".$toMail."</b> отправлено письмо с информацией о заявке.";

	$calc_results = array('msgSendState' => $stateSendMail);

	echo json_encode($calc_results); die;
?>