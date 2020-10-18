<?php

require_once ( "../env.php" );

require_once ( "../controllers/saveController.php" ); 

if (isset($_POST["action"]))
{
	if($_POST["action"] === 'sendEmail')
	{
        $form_data = array(
			'email' => $sales_form_email,
			'date' => $_POST['date'],
			'total' => $_POST['total'],
        );
        
        $param = "?action=sendEMail";

		echo saveController::sendEmail( $form_data, $param, $url_api );		
		
	}	
}

?>