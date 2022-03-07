<?php
	
?>
<html>
	<head><title>Form</title></head>
	<body>
		<h1>Company</h1>
		<form action="formUas.php" method = "POST">
			<div>
			<label for="cari">Cari :</label>
			<input type="text" name="cari" ></input>
			</div>
			<div>
			<input type="submit" name="search" value="Cari" />
			</div>
		</form>
		<?php
			if($_POST['search']){
				include 'validasi.php';
				if(isset($_POST['cari'])){
					
				}
			}
		?>
		
		<div>
			<table border="1">
				<tr>
					<td>nama Staff</td><td>nama Departement</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
	</body>
</html>