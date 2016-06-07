<form>
    <div class="data_base">
			<label for="data_base">Выберете базу </label><br>	
			<input type="radio" name="db" value="ID_panteon"id="ID_panteon">Таблица пантеонов<br>
			<input type="radio" name="db" value="ID_players" id="ID_players">Таблица игроков<br>
			<input type="radio" name="db" value="ID_users" id="ID_users" > Таблица пользователей<br>
	<input type="submit" id="db_btn" value="Подобрать">	
    </div>
    <table class="admin_table">
        {type_db}
    <div class="1">    
        {data_base}
    </div>    
    </table>
</form>