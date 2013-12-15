<?php

require_once 'src/Mandrill.php';
require_once 'settings.php';

function sendEmail($to,$from,$subject,$mssg){
	global $mandrillApiKey;
	global $mandrillTemplate;
	$mandrill = new Mandrill($mandrillApiKey);
	$message = array(
	    'subject' => $subject,
	    'from_email' => $from,
	    'html' => $message,
	    'to' => array(array('email' => $to)),
	    'merge_vars' => array(array(
	        'rcpt' => $to,
	        'vars' =>
	        array(
				array(
	                'name' => 'MESSAGE',
	                'content' => $mssg )
	    ))));
	
	$template_name = $mandrillTemplate;
	
	$template_content;
	$mandrill->messages->sendTemplate($template_name, $template_content, $message);
	
}


?>