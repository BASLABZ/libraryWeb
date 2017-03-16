<!DOCTYPE html>
<html>
<head>
	<title>PADUKA BAS ONGKIR</title>
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/skeleton.css">
	
	<script type="text/javascript" src="jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="twelve columns"><h1>hitung angka</h1></div>
		<div class="row">
			<div class="two columns">Asal Propinsi <br>
			<select id="oriprovince">
				<option>Propinsi</option>
			</select>
			</div>
			<br>
			<div class="two columns"> <br>
			<select id="oricity"><option>Kota</option></select>
			</div>
			<div class="two columns">Tujuan <br>
			<select id="desprovince"><option>Provinsi</option></select>
			</div>
			<div class="two columns"> <br>
			<select id="descity"><option>Kota</option></select>
			</div>
			<div class="two columns">Layanan <br>
			<select id="service">
					<option>JNE</option>
					<option>TIKI</option>
					<option>POS</option>
				</select>
			</div>
			<div class="two columns"> <br>
			<button id="btncheck">cek harga</button>
			
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">Harga  <br>
			</div>
			<hr>
		</div>
		<table class="twelve columns">

			<tr>
				<th>Service</th>
				<th>Deskripsi Service</th>
				<th>Lama Kirim</th>
				<th>Total Biaya</th>
			</tr>	
			<span id="resultsbox">
			<tr>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td>...</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
			</tr>
			</span>
		</table>
	</div>

</div>
</body>
</html>
