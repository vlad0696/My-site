<?php

error_reporting(E_ALL);
include 'main.php';
class About extends Main {


	public function Generate_Index(){
		$registration_tpl = file_get_contents("includes/password.tpl");
		$registration_form_tpl = file_get_contents("includes/password_form.tpl");
        return  $registration_tpl = str_replace('{password}', $registration_form_tpl, $registration_tpl);

	}   
        
}

$indexObj = new About();
$indexObj->Generate_main($indexObj->Generate_Index());