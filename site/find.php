<?php

error_reporting(E_ALL);
include 'main.php';
class Find extends Main{


	public function Generate_Index(){
		$find_tpl = file_get_contents("includes/find.tpl");
        $find_form_tpl = file_get_contents("includes/find_form.tpl");
        
        return   $find_tpl = str_replace('{find_form}', $find_form_tpl, $find_tpl);
     	}   
        
}

$indexObj = new Find();
$indexObj->Generate_main($indexObj->Generate_Index());