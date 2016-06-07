<?php

error_reporting(E_ALL);
include 'main.php';
class Index extends Main{


	public function Generate_Index(){
		$index_tpl = file_get_contents("includes/index.tpl");
        $general_info_tpl= file_get_contents("includes/general_info.tpl"); 
        $find_panteon_tpl= file_get_contents("includes/find_panteon.tpl");
                
        $index_tpl = str_replace('{general_info}', $general_info_tpl, $index_tpl);
        return $index_tpl = str_replace('{find_panteon}', $find_panteon_tpl, $index_tpl);
    }   
        
}

$indexObj = new Index();
$indexObj->Generate_main($indexObj->Generate_Index());