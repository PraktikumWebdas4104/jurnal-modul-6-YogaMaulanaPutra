<form method="POST">

	<table>

		<tr>

			<td>nama</td>

			<td>:</td>

			<td><input type="text" name="nama" length="35" required="harus di isi" placeholder="Maksimal 35 karakter"></td>

		</tr>

		<tr>

			<td>nim</td>

			<td>:</td>

			<td><input type="text" name="nim" ength="10" required="harus di isi" placeholder="Maksimal 10 karakter"></td>

		</tr>
		<tr>
			<td>
			<h1>KELAS</h1>
			<form action="">
  			<input type="radio" name="kelas" value="MI-41-04"> MI-41-04<br>
  			<input type="radio" name="kelas" value="MI-41-03"> MI-41-03<br>
  			<input type="radio" name="kelas" value="MI-41-02"> MI-41-02<br>
  			<input type="radio" name="kelas" value="MI-41-01"> MI-41-01<br><br>
  			</td>
  		</tr>
  		<td>
  		<h1>JENIS KELAMIN</h1>
  		<form action="">
  		<input type="radio" name="gender" value="male"> Male<br>
 		<input type="radio" name="gender" value="female"> Female<br>
 		<input type="radio" name="gender" value="other"> Other<br>
 		</tr><br><br></td>
		</form>
		<td><h1>HOBI</h1>
		<form action="/action_page.php">
  		<input type="checkbox" name="hobi" value="eat"> makan<br>
  		<form action="/action_page.php">
  		<input type="checkbox" name="hobi" value="tidur"> tidurlah<br>
  	</form></td>
  	<tr>
  		<td>
  			<h1>FAKULTAS</h1>
  			<select name="fakultas">
  			<option value="FIT">fit</option>
  			<option value="FIK">fik</option>
  			<option value="feb">feb</option>
  			<option value="MBTI">mbti</option>
  		</select></td></tr>
  		<tr>
  			<td>
  				<h1>ALAMAT</h1>
  			<textarea rows="4" cols="50">
			</textarea></td>
  		</tr>
  		<tr>
  			<td>PASWORD
  				<input type="password" name="password" length="10" required="harus di isi" placeholder="harus 10 karakter">
  			</td>
  		</tr>
  		<td>
  			<input type="submit" name="submit" value="registrasi">
  		</td>
  	</tr>


  

		</form>

	</table>
	<?php 
		if (isset($_POST['submit'])) {
			# code...
			include 'registrasi.php';
		}
	 ?>

</form>