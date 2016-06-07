	<div class="find">
		
		<div class="header_of_find ">
			<h2>Информация для поиска игроков </h2>
			<h4>Заполните информацию, по которой можно подобрать игроков в ваш Пантеон</h4>
		</div>
        
        <div class="input_min_pres">
			<label for="clanename" >Название клана: </label><br>
			<p><input type="text" id="clanename" oncontextmenu='return false' onpaste="return false" onkeyup="onkey(this)" onkeydown="onkey(this)"><br></p>
		</div>
	
        <div class="input_min_pres">
			<label for="claneurl" >Ссылка на страницу клана: </label><br>
			<p><input type="text" id="claneurl" oncontextmenu='return false' onkeydown="onkeyurl(this)"onkeyup="onkeyurl(this)" ><br></p>
		</div>
		
		<div class="input_min_pres">
			<label for="prestige" >Минимальное количество престижа: </label><br>
			<p><input type="text" id="prestige" oncontextmenu='return false' onpaste="return false" onkeydown="onkeynumber(this)"onkeyup="onkeynumber(this)" maxlength="7"><br></p>
		</div>
		<div class="selectbox_playing_in_day">
			<label for="selectbox_playing_in_day">Время, в которое проводятся клановые мероприятия: </label><br>	
			<ul>
			<li><select id="select1">
				<option>0:00  </option>
				<option>1:00  </option>
				<option>2:00  </option>
				<option>3:00  </option>
				<option>4:00  </option>
				<option>5:00  </option>
				<option>6:00  </option>
				<option>7:00  </option>
				<option>8:00  </option>
				<option>9:00  </option>
				<option>10:00  </option>
				<option>11:00  </option>
				<option>12:00  </option>
				<option>13:00  </option>
				<option>14:00  </option>
				<option>15:00  </option>
				<option>16:00  </option>
				<option>17:00  </option>
				<option>18:00  </option>
				<option>19:00  </option>
				<option>20:00  </option>
				<option>21:00  </option>
				<option>22:00  </option>
				<option>23:00  </option>
				<option>24:00  </option>
			</select></li>
			
			<li><select id= "select2">
				<option>0:00  </option>
				<option>1:00  </option>
				<option>2:00  </option>
				<option>3:00  </option>
				<option>4:00  </option>
				<option>5:00  </option>
				<option>6:00  </option>
				<option>7:00  </option>
				<option>8:00  </option>
				<option>9:00  </option>
				<option>10:00  </option>
				<option>11:00  </option>
				<option>12:00  </option>
				<option>13:00  </option>
				<option>14:00  </option>
				<option>15:00  </option>
				<option>16:00  </option>
				<option>17:00  </option>
				<option>18:00  </option>
				<option>19:00  </option>
				<option>20:00  </option>
				<option>21:00  </option>
				<option>22:00  </option>
				<option>23:00  </option>
				<option>24:00  </option>
			</select> </li>
			</ul>
		</div>
	
		<div class="checkbox_types_of_game">
			<label for="checkbox_types_of_game">Какой игровой класс вам более необходим? </label><br>	
			<input type="radio" name="class" value="Support"id="ID_sup">Поддержка<br>
			<input type="radio" name="class" value="Tank" id="ID_tank">Танк<br>
			<input type="radio" name="class" value="Attack" id="ID_dd"> Атакующий<br>
		</div>
		<div class="button_on_form">
         <input type="submit" id="butnFindPlayer" value="Подобрать игрока">
                
        </div>
</div>