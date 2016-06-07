<div class="find">
    <table class ="sort">
    
        <tr>
            <td>
       <div class="checkbox_types_of_game">
			<label for="checkbox_types_of_game">Класс: </label><br>	
			<input type="radio" name="class" value="Support"id="ID_sup">Поддержка<br>
			<input type="radio" name="class" value="Tank" id="ID_tank">Танк<br>
			<input type="radio" name="class" value="Attack" id="ID_dd"> Атакующий<br>
            <input type="radio" name="class" value="ALL" id="ID_dd"> Все<br>
           
		</div>
        </td>
        <td>
        <div class="checkbox_types_of_game">
			<label for="checkbox_types_of_game">Сортировать по: </label><br>	
			<input type="radio" name="sort" value="nickname"id="ID_sup">Имя<br>
			<input type="radio" name="sort" value="prestige" id="ID_tank">Престиж<br>
			<input type="radio" name="sort" value="class" id="ID_dd"> Класс<br>
		</div>
        </td>
        </tr>
    
    </table>
        <input type="submit" id="sort_btn" value="Подобрать">
    
</div>

<div>
	<table class="statistic">
		<caption>Список Игроков, ищющих Пантеон</caption>
		<tr>
			<th><p> Игрок</p></th>
			<th><p>Престиж </p></th>
			<th><p>Предпочитаемый класс</p></th>
            <th><p>Время, в которое удобно играть</p></th>
            
        </tr>
        
        {line}
	</table>		
	</div>