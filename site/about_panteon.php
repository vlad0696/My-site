<?php

error_reporting(E_ALL);
include 'main.php';
class About extends Main {


	public function Generate_Index(){
		$about_panteon_tpl = file_get_contents("includes/about_panteon.tpl");
        $about_panteon_text_tpl =file_get_contents("includes/about_panteon_text.tpl"); 
        return  $about_panteon_tpl = str_replace('{about_panteon_text}', $about_panteon_text_tpl, $about_panteon_tpl);

	}   
        
}

$indexObj = new About();
$indexObj->Generate_main($indexObj->Generate_Index());