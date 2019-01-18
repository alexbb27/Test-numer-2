<?php
	include_once 'mam/autyzm.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title> CO? </title>
	</head>

	<body>
		<h4> Rozwiązanie testu nr 2 </h4>
		<p>Poka wszystkich użytkowników i ich iq:</p>
	
	<?php
		$sql = "SELECT * FROM users;";
		$result = mysqli_query($db_connect, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['name'] . " - " . $row['iq'] . "<br>";
				}
		}
	?>
		<br><br><marquee direction = up> xD xD xD xD xD XD xDd Dx XD xD XD Xd </marquee> <br>
 
	<form method="POST">
    	<label for="data">Wybierz datę:</label>
    	<input type="date" id="data_in" name="data" min="2012-01-01" max="2499-10-10" required>
	</form>

 	<script>
//		var dataPor =   document.getElementById("data_in").value; ¯\_(ツ)_/¯
		var from1 = new Date('2012-01-01');
		var from2 = new Date('2015-01-02');
		var from3 = new Date('2019-01-01');
		var from4 = new Date('2050-01-01');
		var to1 = new Date('2015-01-01');
		var to2 = new Date('2018-12-31');
		var to3 = new Date('2019-12-31');
		var to4 = new Date('2015-10-10');

//		if (dataPor > from1) && (dataPor < to1) {
//			var kto = "zanza";
//		} else if (dataPor > from2) && (dataPor < to2) {
//			var kto = "karol, urbun";
//		} else if (dataPor > from3) && (dataPor < to3) {
//			var kto = "alexbb, maciek3000, tomek";
//		} else if (dataPor > from4) && (dataPor < to4) {
//			var kto = "?";
//		}

		var kto = "coś bardzo mocno poszło nie tak";

		function pokaWpis() {
  		document.getElementById('poka').innerHTML = kto;
  		}
	</script>

  	<input type="submit" onclick="pokaWpis();"><br/>
  	<p>Kto pasuje do wpisanej daty wg iq: </p>
  	<span id='poka'></span>

	</body>
</html>