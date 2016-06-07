<?php

error_reporting(E_ALL);
include 'main.php';
include 'classes.php';
class Statistic extends Main{
 
    public function  Generate_page(){
        $num = 4;
        $result = mysqli_query(Connect(),"SELECT COUNT(*) FROM find_people_for_panteon");  
        $row=$result->fetch_array(MYSQLI_NUM);
        $posts=$row[0];    
        $total = intval(($posts - 1) / $num) + 1;  
        if (isset($_GET['page'])) {
           $page = @$_GET['page'];
            if ($page > 0 && $page <= $total) {
                $start = ($page - 1) * $num;
                $end = $start + $num;
            } 
           else {
            $start = 0;              
            $end = $num;
            }
        }
        else {
            $start = 0;
            $end = $num;
        } 
        $page = intval(@$_GET['page']);
        if(empty($page) or $page < 0) $page = 1;  
        if($page > $total) $page = $total;  
        $start = $page * $num - $num;  
        $result = mysqli_query(Connect(), "SELECT * FROM find_people_for_panteon LIMIT $start, $num");  
        while ( $postrow[] = mysqli_fetch_array($result))  ;
        
        if ($page != 1) $pervpage = '<a href= statistic.php?page=1><<</a>  
                               <a href= statistic.php?page='. ($page - 1) .'><</a> ';  
        if ($page != $total) $nextpage = ' <a href= statistic.php?page='. ($page + 1) .'>></a>  
                                   <a href= statistic.php?page=' .$total. '>>></a>'; 
        $result_string='<dev class="page">';
        if($page - 2 > 0) $result_string .= ' <a href= statistic.php?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';  
        if($page - 1 > 0) $result_string .= '<a href= statistic.php?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';  
        $result_string.='<b>'.$page.'</b>';
        if($page + 1 <= $total) $result_string .= ' | <a href=statistic.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>'; 
        if($page + 2 <= $total) $result_string .= ' | <a href=statistic.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';  
        $result_string.='</dev>';
        echo $result_string."<br><br><br>";  
    }
    
    
    public function  Generate_table($table_tpl){
        if (isset($_GET['page'])){
            $start= (@$_GET['page']-1)*4;
        }
        else 
            $start=0;
        $num=4;
        $bd_array=Get("find_people_for_panteon", Connect(), "ORDER BY prestige",'',"LIMIT $start, 4");
        $result_table='';
        for($i=0;$i<count($bd_array); $i++){
            $row_tpl=$table_tpl;
            $row_tpl= str_replace('{panteon_name}', $bd_array[$i]['panteon_name'],  $row_tpl);
            $row_tpl= str_replace('{panteon_url}', $bd_array[$i]['panteon_url'],  $row_tpl);
            $row_tpl= str_replace('{prestige}', $bd_array[$i]['prestige'],  $row_tpl);
            $row_tpl= str_replace('{player_class}', $bd_array[$i]['class'],  $row_tpl);
            $row_tpl= str_replace('{game_time}', $bd_array[$i]['time_in']." - ".$bd_array[$i]['time_out'],  $row_tpl);
            $result_table.=$row_tpl;
        }
        
        return $result_table;
    }
    
	public function Generate_Index(){
		$statistic_tpl = file_get_contents("includes/statistic.tpl");
        $rating_panteons_tpl =file_get_contents("includes/rating_panteons.tpl"); 
        $line_of_rating_tpl= file_get_contents("includes/line_of_rating.tpl");
        $line_of_rating_tpl=$this->Generate_table($line_of_rating_tpl);
        $rating_panteons_tpl =str_replace('{rating_panteon}',$line_of_rating_tpl,$rating_panteons_tpl);
        return $statistic_tpl = str_replace('{rating_panteons}', $rating_panteons_tpl, $statistic_tpl);
}   
        
}

$indexObj = new Statistic();
$indexObj->Generate_main($indexObj->Generate_Index());
$indexObj->Generate_page();