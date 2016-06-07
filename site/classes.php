<?php 
error_reporting(E_ALL);
function Connect(){
    $con = mysqli_connect("localhost","vlad0696","e15091977","find_panteon");
	if(!$con){
		exit("Ошибка подключения к БД!");
    }
	return $con;
}

function Add($con){

	$arr = array('idpanteon'=>$_POST['IDpanteon'],'Pres'=>$_POST['presstige'],'date_in'=> $_POST['Select_in'],'date_out'=>$_POST['Select_out'],'player_class'=>$_POST['Playerclass'],'pname'=>$_POST['panteonname'],
    'purl'=>$_POST['panteonurl']);   
    foreach($arr as $key=>$value){
        $arr[$key]=$con->real_escape_string($value);
    }
    mysqli_query($con,"INSERT INTO find_people_for_panteon (prestige,time_in,time_out,class,panteon_name,panteon_url)
    VALUES('".$arr['Pres']."','".$arr['date_in']."','".$arr['date_out']."','".$arr['player_class']."',   '".$arr['pname']."','".$arr['purl']."')");
} 
function Add_db($obj, $con, $db){
    $string="";
    foreach($obj as $key=>$value){
        $obj[$key]=$con->real_escape_string($value);
    }
    switch($db){
        case "ID_players":
        $table='find_panteon_for_player';
        $string="INSERT INTO $table ( `nickname`, `prestige`, `user_url`, `time_in`, `time_out`, `class`) VALUES (". "'".$obj['nickname']."','".$obj['prestige']."','".$obj['user_url']."','".$obj['time_in']."','".$obj['time_out']."','".$obj['class']."')" ;
            break;
        case"ID_panteon":
        $table='find_people_for_panteon';
        $string="INSERT INTO $table ( `prestige`, `time_in`, `time_out`, `class`, `panteon_name`, `panteon_url`) VALUES (". "'".$obj['prestige']."','".$obj['time_in']."','".$obj['time_out']."','".$obj['class']."','".$obj['panteon_name']."','".$obj['panteon_url']."')" ;
            break;
        case "ID_users":
        $table='users';
        $string="INSERT INTO $table ( `user_login`, `user_password`, `user_nickname`, `email`) VALUES (". "'".$obj['user_login']."','".$obj['user_password']."','".$obj['user_nickname']."','".$obj['email']."')" ;
            break;
    }
    echo $string;
    mysqli_query($con,$string);
}

function Change_db($obj, $con, $db){
    $strings;
    foreach ($obj as $key=>$value){
        $strings=explode('"', $value);
        var_dump($strings);
        if (count($strings)==4){
            $strings[1]=$con->real_escape_string($strings[1].'"');
            $strings[2]= $strings[3];
        }
        else
            $strings[1]=$con->real_escape_string($strings[1]);
        var_dump($strings);
        $obj[$key]=$strings[0]."\"".$strings[1]."\"".$strings[2]." ";
    
    }
var_dump($obj);
    switch($db){
        case "ID_players":
        $table='find_panteon_for_player';
        $string="UPDATE $table  SET ".$obj['class'].$obj['nickname'].$obj['user_url'].$obj['prestige'].$obj['time_in'].$obj['time_out']." WHERE " .$obj['id_player'];
            break;
        case"ID_panteon":
        $table='find_people_for_panteon';
        $string="UPDATE $table  SET ".$obj['class'].$obj['panteon_name'].$obj['panteon_url'].$obj['prestige'].$obj['time_in'].$obj['time_out']." WHERE " .$obj['id_panteon'];
            break;
        case "ID_users":
        $table='users';
        $string="UPDATE $table  SET ".$obj['user_login'].$obj['user_password'].$obj['user_nickname'].$obj['email']." WHERE " .$obj['id_user'];

            break;
    }
    echo $string;
    mysqli_query($con,$string);
}

function Delete_db($obj, $con, $db){
    $string="";
    switch($db){
        case "ID_players":
            $table='find_panteon_for_player';
             $string="DELETE FROM $table WHERE id_player ='" .$obj['id_player']."'";
            break;
        case"ID_panteon":
            $table='find_people_for_panteon';
             $string="DELETE FROM $table WHERE id_panteon ='" .$obj['id_panteon']."'";
            break;
        case "ID_users":
            $table='users';
            $string="DELETE FROM $table WHERE id_user= '" .$obj['id_user']."'";
            break;
    }
   
    echo $string;
    mysqli_query($con,$string);
}


function Password_recovery($con,$password, $email){
    echo $password;
    $password=sha1($password);
    echo $password;
    mysqli_query($con,"UPDATE users  SET new_password= '".$password."' WHERE email= '".$email."'");
    
}
function Add_panteon($con){

	$arr = array('idplayer'=>$_POST['IDplayer'],'Pres'=>$_POST['Userpres'],'date_in'=> $_POST['Select_in'],'date_out'=>$_POST['Select_out'],'player_class'=>$_POST['Playerclass'],'pname'=>$_POST['nick'],
    'userurl'=>$_POST['userurl']);   
    mysqli_query($con,"INSERT INTO find_panteon_for_player (nickname,time_in,time_out,class,prestige,user_url)
    VALUES('".$arr['pname']."','".$arr['date_in'].
                 "','".$arr['date_out']."','".$arr['player_class']."',   '".$arr['Pres']."','".$arr['userurl']."')");
}

function Add_user($con){
    $password=sha1($_POST['password']);
	mysqli_query($con,"INSERT INTO users (user_login,user_password,user_nickname,email)
    VALUES('".$_POST['login']."','".$password."','".$_POST['nick']."','".$_POST['email']."')");
}

function Authorize($con){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result = mysqli_query(Connect(),"SELECT * FROM users WHERE email='".$_POST['email']."'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['user_password']))
    {
        exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
        if ($myrow['user_password']==sha1($_POST['password'])) {
                $_SESSION['login']=$myrow['user_login']; 
              mysqli_query($con,"UPDATE users  SET new_password= '' WHERE email= '".$email."'");
            }
        else {
            echo sha1($password)."<br>";
            echo $myrow['new_password']."<br>";
            if ($myrow['new_password']==sha1($password)) {
                 $_SESSION['login']=$myrow['user_login']; 
                
          //   echo"UPDATE users  SET user_password= '".sha1($password)."', new_password='' WHERE email= '".$email."'";
                 mysqli_query($con,"UPDATE users  SET user_password= '".sha1($password)."', new_password='' WHERE email= '".$email."'");
               
            }
            else
                exit ("Извините, введённый вами login или пароль неверный1.");
        }
    
    }
   
}

function Get($name_table,$con, $sort, $class, $desc){

	$result = mysqli_query($con,"SELECT * FROM  $name_table $class  $sort $desc ");
	$additionalArray = array();
	while($row = mysqli_fetch_assoc($result)){
		$additionalArray[] = $row;
	};
    	$additionalArray = array_reverse($additionalArray);
    
	return $additionalArray;
}

?>