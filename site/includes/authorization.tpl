<div onclick="show('none')" id="wrap"></div>
    <div id="window">			
	<img class="close" onclick="show('none')" src="close.png">
	   <div id="login-form">
      <h1>АВТОРИЗАЦИЯ</h1>
        <fieldset>
            <form action="javascript:void(0);" method="get">
                <input type="email" required value="Email" onBlur="if(this.value=='')this.value='Логин'" onFocus="if(this.value=='Логин')this.value='' " id="a_email" oncontextmenu='return false' onkeydown="onkeyemail(this)"onkeyup="onkeyemail(this)" onpaste="return false"> 
                <input type="password" required value="Пароль" onBlur="if(this.value=='')this.value='Пароль'" onFocus="if(this.value=='Пароль')this.value='' "id= "a_password" oncontextmenu='return false' onkeydown="onkey(this)"onkeyup="onkeyemail" onpaste="return false"> 
                <input type="submit" value="ВОЙТИ" id="my_bttn_author">
                <div id="autorize">
                    <a href="registration.php">Регистрация</a> <a href="password.php">Забыли пароль</a>
                </div>
            </form>
        </fieldset>
    </div> 
</div>
      <script src="js/jquery.js"></script>
<script src="js/autorization.js"></script>
<script src="js/session_exit.js"></script>
<script src="js/admin.js"></script>