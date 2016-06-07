<?php 

	require_once 'classes.php';
require_once 'main.php';
	

if(isset($_POST["page"]))
    switch($_POST["page"]){
        case "find_player":{
            Add(Connect());
           break;
        }
        case "find_panteon":{
            Add_panteon(Connect());
            break;
        }
          case "registration":{
            mail($_POST['email'], "Добро пожаловать!", "Добро пожаловать на сайт Поиска Пантеона\n Ваш пароль: ".$_POST['password']);  
            Add_user(Connect());
            break;    }
            
        case "authorization":{
            Authorize(Connect());
            break;
        }
       case "exit":{
            unset($_SESSION['name']);
            session_destroy();
            break;
        }
        case "password":{
            $pass=$_POST['password'];
            $email=$_POST['email'];
            echo $email;
            mail($email, "Восстановление пароля!", " Ваш новый пароль пароль: ".$pass);
            Password_recovery(Connect(), $pass, $email);
            break;
        }
        case "admin":{
            Change_db($_POST['obj'], Connect(), $_POST['dbase']);
            break;
        }
        case "admin_delete":{
            Delete_db($_POST['obj'], Connect(), $_POST['dbase']);
            break;
        }
        case "admin_add":{
            Add_db($_POST['obj'], Connect(), $_POST['dbase']);
            break;
        }
            
	}
?>