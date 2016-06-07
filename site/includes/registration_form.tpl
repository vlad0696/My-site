	<div class="find">
		
		<div class="header_of_find ">
			<h2>Информация для поиска </h2>
			<h4>Заполните личную информацию, чтобы можно было подобрать для вас Пантеон</h4>
		</div>
        
		<div class="login_form">
		<label for="nickname">Вашe Имя: </label><br>
		<p><input type="text" id="nickname"  oncontextmenu='return false' onpaste="return false" onkeyup="onkey(this)" onkeydown="onkey(this)"><br></p>
        <label for="login">Ваш Логин: </label><br>
		<p><input type="text" required value="Логин" onBlur="if(this.value=='')this.value='Логин'" onFocus="if(this.value=='Логин')this.value='' " id="login" oncontextmenu='return false' onpaste="return false" onkeyup="onkey(this)" onkeydown="onkey(this)"><br></p> 
        <label for="email">Вашa Почта: </label><br>
		<p><input type="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' " id="email" oncontextmenu='return false' onkeydown="onkeyemail(this)"onkeyup="onkeyemail(this)" onpaste="return false" ><br></p> 
        <label for="login">Ваш Пароль: </label><br>
        <p><input type="password" required value="Пароль" onBlur="if(this.value=='')this.value='Пароль'" onFocus="if(this.value=='Пароль')this.value='' " id="password" oncontextmenu='return false' onpaste="return false" onkeyup="onkey(this)" onkeydown="onkey(this)"><br></p> 
        </div>
            <input type="submit" value="Ввести данные" id="registration_btn">

</div>