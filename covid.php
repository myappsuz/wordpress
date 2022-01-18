<style>
	tr, td{
		border: 1px solid rgb(85, 85, 85);
		padding: 10px;
		font-family: sans-serif;
    	font-size: 16px;
	}
</style>
<form action="" method="get">
	<input type="text" name="code">
	<input type="submit" value="ReCheck">
</form>
<table>
	<tr>
		<td>код страны</td>
		<td id="code"></td>
		
	</tr>
	<tr><td>страна</td>
		<td id="country"></td>
	</tr>
	<tr><td>критический</td>
		<td id="critical"></td>
	</tr>
	<tr><td>летальные исходы</td>
		<td id="deaths"></td>
	</tr><tr><td>последнее изменение</td>
		<td id="lastChange"></td>
	</tr><tr><td>последнее обновление</td>
		<td id="lastUpdate"></td>
	</tr><tr><td>широта</td>
		<td id="latitude"></td>
	</tr>
	<tr><td>долгота</td>
		<td id="longitude"></td>
	</tr><tr><td>выздоровел</td>
		<td id="recovered"></td>
	</tr>
</table>

<script>

fetch("https://covid-19-data.p.rapidapi.com/country/code?code=<?php echo $_GET["code"] ?>", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "covid-19-data.p.rapidapi.com",
		"x-rapidapi-key": "100b071488msh4a1041a9350947dp1b5d8fjsnd9fb1ff7a6a7"
	}
})
.then(response => {
	return response.json();

	
}).then(jokes => {
	var cou = jokes
cou.forEach(item => {
	document.getElementById("code").innerHTML = item.code
	document.getElementById("country").innerHTML = item.country
	document.getElementById("critical").innerHTML = item.critical
	document.getElementById("deaths").innerHTML = item.deaths
	document.getElementById("lastChange").innerHTML = item.lastChange
	document.getElementById("lastUpdate").innerHTML = item.lastUpdate
	document.getElementById("latitude").innerHTML = item.latitude
	document.getElementById("longitude").innerHTML = item.longitude
	document.getElementById("recovered").innerHTML = item.recovered
});

})
.catch(err => {
	console.error(err);
});
</script>