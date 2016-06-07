<?php

error_reporting(E_ALL);
include 'main.php';
class Info extends Main{


	public function Generate_Index(){
		$info_tpl = file_get_contents("includes/info.tpl");
        $info_about_game =file_get_contents("includes/info_about_game.tpl"); 
                
        return $info_tpl = str_replace('{info_about_game}', $info_about_game, $info_tpl);
        
	}   
        
}

$indexObj = new Info();
$indexObj->Generate_main($indexObj->Generate_Index());