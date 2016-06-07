<?php

error_reporting(E_ALL);
include 'main.php';
include 'classes.php';  
class Index extends Main{

   public function  Generate_table($table_tpl, $db){
       $bd_array=Get("find_panteon_for_player", Connect(), "", "",'');
        switch($db){
                case "ID_players": 
                    $bd_array=Get("find_panteon_for_player", Connect(), "", "",'');
                    break;
                case "ID_panteon":
                    echo "azaza";
                    $bd_array=Get("find_people_for_panteon", Connect(), "", "",'');
                    break;
            case "ID_users":
                $bd_array=Get("users", Connect(), "", "",'');
                    break;
            }
        $result_table='';
        switch($db){
            case "ID_players":
                for($i=0;$i<count($bd_array); $i++){
                    $row_tpl=$table_tpl;
                    $row_tpl= str_replace('{nick_name}', $bd_array[$i]['nickname'],  $row_tpl);
                    $row_tpl= str_replace('{id}', $bd_array[$i]['Id_player'],  $row_tpl);
                    $row_tpl= str_replace('{user_url}', $bd_array[$i]['user_url'],  $row_tpl);
                    $row_tpl= str_replace('{prestige}', $bd_array[$i]['prestige'],  $row_tpl);
                    $row_tpl= str_replace('{class}', $bd_array[$i]['class'],  $row_tpl);
                    $row_tpl= str_replace('{time_in}', $bd_array[$i]['time_in'],  $row_tpl);
                    $row_tpl= str_replace('{time_out}', $bd_array[$i]['time_out'],  $row_tpl);
                    $row_tpl=str_replace('{delete}', "submit", $row_tpl);
                    $row_tpl=str_replace('{change}', "change", $row_tpl);
                    $row_tpl=str_replace('{value}', 'Изменить', $row_tpl);
                    $result_table.=$row_tpl;
                }
                    $row_tpl=$table_tpl;
                    $row_tpl= str_replace('{nick_name}', '',  $row_tpl);
                    $row_tpl= str_replace('{id}', '',  $row_tpl);
                    $row_tpl= str_replace('{user_url}', '',  $row_tpl);
                    $row_tpl= str_replace('{prestige}', '',  $row_tpl);
                    $row_tpl= str_replace('{class}', '',  $row_tpl);
                    $row_tpl= str_replace('{time_in}', '',  $row_tpl);
                    $row_tpl= str_replace('{time_out}', '',  $row_tpl);
                    $row_tpl=str_replace('{change}', 'add', $row_tpl);
                    $row_tpl=str_replace('{value}', 'Добавить', $row_tpl);
                    $row_tpl=str_replace('{delete}', 'hidden', $row_tpl);
                    $result_table.=$row_tpl;
                break;
            case "ID_panteon":
                for($i=0;$i<count($bd_array); $i++){
                    $row_tpl=$table_tpl;
                    $row_tpl= str_replace('{nick_name}', $bd_array[$i]['panteon_name'],  $row_tpl);
                    $row_tpl= str_replace('{id}', $bd_array[$i]['id_panteon'],  $row_tpl);
                    $row_tpl= str_replace('{user_url}', $bd_array[$i]['panteon_url'],  $row_tpl);
                    $row_tpl= str_replace('{prestige}', $bd_array[$i]['prestige'],  $row_tpl);
                    $row_tpl= str_replace('{class}', $bd_array[$i]['class'],  $row_tpl);
                    $row_tpl= str_replace('{time_in}', $bd_array[$i]['time_in'],  $row_tpl);
                    $row_tpl= str_replace('{time_out}', $bd_array[$i]['time_out'],  $row_tpl);
                    $row_tpl=str_replace('{delete}', "submit", $row_tpl);
                    $row_tpl=str_replace('{change}', "change", $row_tpl);
                    $row_tpl=str_replace('{value}', 'Изменить', $row_tpl);
                    $result_table.=$row_tpl;
                
                }
                    $row_tpl=$table_tpl;
                    $row_tpl= str_replace('{nick_name}', '',  $row_tpl);
                    $row_tpl= str_replace('{id}', '',  $row_tpl);
                    $row_tpl= str_replace('{user_url}', '',  $row_tpl);
                    $row_tpl= str_replace('{prestige}', '',  $row_tpl);
                    $row_tpl= str_replace('{class}', '',  $row_tpl);
                    $row_tpl= str_replace('{time_in}', '',  $row_tpl);
                    $row_tpl= str_replace('{time_out}', '',  $row_tpl);
                    $row_tpl=str_replace('{change}', 'add', $row_tpl);
                    $row_tpl=str_replace('{value}', 'Добавить', $row_tpl);
                    $row_tpl=str_replace('{delete}', 'hidden', $row_tpl);
                    $result_table.=$row_tpl;
                break;
            case "ID_users":
                for($i=0;$i<count($bd_array); $i++){
                    $row_tpl=$table_tpl;
                    $row_tpl= str_replace('{nickname}', $bd_array[$i]['user_nickname'],  $row_tpl);
                    $row_tpl= str_replace('{id}', $bd_array[$i]['id_user'],  $row_tpl);
                    $row_tpl= str_replace('{user_login}', $bd_array[$i]['user_login'],  $row_tpl);
                    $row_tpl= str_replace('{user_password}', $bd_array[$i]['user_password'],  $row_tpl);
                    $row_tpl= str_replace('{email}', $bd_array[$i]['email'],  $row_tpl);
                    $row_tpl=str_replace('{delete}', "submit", $row_tpl);
                    $row_tpl=str_replace('{change}', "change", $row_tpl);
                    $row_tpl=str_replace('{value}', 'Изменить', $row_tpl);
                    $result_table.=$row_tpl;
                }
                    $row_tpl=$table_tpl;
                    $row_tpl= str_replace('{nickname}', '',  $row_tpl);
                    $row_tpl= str_replace('{id}', '',  $row_tpl);
                    $row_tpl= str_replace('{user_login}', '',  $row_tpl);
                    $row_tpl= str_replace('{user_password}', '',  $row_tpl);
                    $row_tpl= str_replace('{email}', '',  $row_tpl);
                    $row_tpl=str_replace('{change}', 'add', $row_tpl);
                    $row_tpl=str_replace('{value}', 'Добавить', $row_tpl);
                    $row_tpl=str_replace('{delete}', 'hidden', $row_tpl);
                    $result_table.=$row_tpl;
                break;
        }
        return $result_table;
    }
	public function Generate_Index(){
		$admin_tpl = file_get_contents("includes/admin.tpl");
        $admin_form_tpl= file_get_contents("includes/admin_form.tpl"); 
        $db_tpl=file_get_contents("includes/players_admin.tpl"); 
        $type_db_tpl=file_get_contents("includes/players_admin_db.tpl"); 
        $db_tpl=$this->Generate_table($db_tpl, "ID_players");
        $admin_tpl = str_replace('{admin}', $admin_form_tpl, $admin_tpl);
        $admin_tpl = str_replace('{type_db}', $type_db_tpl, $admin_tpl);
        return $admin_tpl = str_replace('{data_base}', $db_tpl, $admin_tpl);
    }   
        
}

$indexObj = new Index();
$db_tpl=file_get_contents("includes/players_admin.tpl"); 
$type_db_tpl=file_get_contents("includes/players_admin_db.tpl"); 
if(!isset($_POST["data_base"]))
    $indexObj->Generate_main($indexObj->Generate_Index());
else
    switch ($_POST["data_base"]){
    case  "ID_players":
        echo $type_db_tpl.$indexObj->Generate_table($db_tpl, $_POST["data_base"]);
        break;
    case "ID_panteon":
        $db_tpl=file_get_contents("includes/panteon_admin.tpl"); 
        $type_db_tpl=file_get_contents("includes/panteon_admin_db.tpl"); 
        echo $type_db_tpl.$indexObj->Generate_table($db_tpl, $_POST["data_base"]);
        break;
     case "ID_users":
        $db_tpl=file_get_contents("includes/users_admin.tpl"); 
        $type_db_tpl=file_get_contents("includes/users_admin_db.tpl"); 
        echo $type_db_tpl.$indexObj->Generate_table($db_tpl, $_POST["data_base"]);
        break;
    }