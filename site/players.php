<?php

error_reporting(E_ALL);
include 'main.php';
include 'classes.php';
class Statistic extends Main{


    public function  Generate_table($table_tpl){
    if (isset($_POST["sort_by_class"])){
        $sort_by_class=$_POST["sort_by_class"];
    }
    if (isset($_POST["sort_by_info"])){
        $sort_by_info=$_POST["sort_by_info"];
    }   
    
    if (isset($_POST["sort_by_class"]))
    {    
     if(($sort_by_class!="NULL1") and  ($sort_by_info!="NULL1")){
        if ($sort_by_class=="ALL")
            $bd_array=Get("find_panteon_for_player", Connect(), "ORDER BY ".$sort_by_info, "",'');
        else   
            $bd_array=Get("find_panteon_for_player", Connect(), "ORDER BY ".$sort_by_info, "WHERE class='$sort_by_class'",'');
         }
     else
         if ($sort_by_class!="NULL1"){
            if ($sort_by_class=="ALL")
                $bd_array=Get("find_panteon_for_player", Connect(), "", "",'');
            else   

                $bd_array=Get("find_panteon_for_player", Connect(), "", "WHERE class='$sort_by_class'",'');
         }
         else{
            if ($sort_by_class=="ALL")
                $bd_array=Get("find_panteon_for_player", Connect(), "ORDER BY ".$sort_by_info, "",'');
            else   
              $bd_array=Get("find_panteon_for_player", Connect(), "ORDER BY ".$sort_by_info, "",'');
       
         }
    }
    else{                 
                    $bd_array=Get("find_panteon_for_player", Connect(), "prestige", "",'');
               
                }
                
        $result_table='';
        for($i=0;$i<count($bd_array); $i++){
            $row_tpl=$table_tpl;
            $row_tpl= str_replace('{nick_name}', $bd_array[$i]['nickname'],  $row_tpl);
            $row_tpl= str_replace('{user_url}', $bd_array[$i]['user_url'],  $row_tpl);
            $row_tpl= str_replace('{prestige}', $bd_array[$i]['prestige'],  $row_tpl);
            $row_tpl= str_replace('{player_class}', $bd_array[$i]['class'],  $row_tpl);
            $row_tpl= str_replace('{game_time}', $bd_array[$i]['time_in']." - ".$bd_array[$i]['time_out'],  $row_tpl);
            $result_table.=$row_tpl;
        }
        
        return $result_table;
    }
        
	public function Generate_Index(){
		$statistic_tpl = file_get_contents("includes/players.tpl");
        $rating_panteons_tpl =file_get_contents("includes/players_stat.tpl"); 
        $line_of_player_stat_tpl= file_get_contents("includes/line_of_player_stat.tpl");
        $line_of_player_stat_tpl=$this->Generate_table($line_of_player_stat_tpl);
        $rating_panteons_tpl =str_replace('{line_of_player_stat}',$line_of_player_stat_tpl,$rating_panteons_tpl);
         $rating_panteons_tpl =str_replace('{line}',$line_of_player_stat_tpl,$rating_panteons_tpl);
        return $statistic_tpl = str_replace('{players_stat}', $rating_panteons_tpl, $statistic_tpl);
}   
        
}
$indexObj = new Statistic();
$rating_panteons_tpl =file_get_contents("includes/players_heade.tpl"); 
if (isset($_POST["sort_by_class"]) or isset($_POST["sort_by_info"])){
    echo $rating_panteons_tpl.$indexObj->Generate_table(file_get_contents("includes/line_of_player_stat.tpl"));
}
else
{
    $indexObj->Generate_main($indexObj->Generate_Index());
}