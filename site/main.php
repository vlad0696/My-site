<?php

error_reporting(E_ALL);
session_start('start');
class Main{


	public function Generate_main($incdlude_tpl){
        $header_tpl= file_get_contents("includes/header.tpl");
        $header_after_autorization_tpl=file_get_contents("includes/header_after_autorization.tpl");
        $menu_tpl= file_get_contents("includes/menu.tpl");
        $menu_after_authorization_tpl= file_get_contents("includes/menu_after_authorization.tpl");
        $menu_admin_tpl=file_get_contents("includes/menu_admin.tpl");
        $footer_tpl = file_get_contents("includes/footer.tpl");
        $autorization_tpl = file_get_contents("includes/authorization.tpl");
        if (isset($_SESSION['login'])){
            $incdlude_tpl = str_replace('{header}',$header_after_autorization_tpl,$incdlude_tpl);
            $incdlude_tpl = str_replace('{login}',$_SESSION['login'],$incdlude_tpl);
            if ($_SESSION['login']!='ADMIN')
                $incdlude_tpl = str_replace('{menu}',$menu_after_authorization_tpl,$incdlude_tpl);
            else
                $incdlude_tpl = str_replace('{menu}',$menu_admin_tpl,$incdlude_tpl);

        }
        else{
            $incdlude_tpl = str_replace('{header}',$header_tpl,$incdlude_tpl);
            $incdlude_tpl = str_replace('{menu}',$menu_tpl,$incdlude_tpl);
        }
        
        $incdlude_tpl = str_replace('{footer}', $footer_tpl, $incdlude_tpl);
        $incdlude_tpl = str_replace('{authorization}', $autorization_tpl, $incdlude_tpl);
        echo $incdlude_tpl;
	}   
        
}
