<!DOCTYPE html>
<html>
<head>
	<title>PADUKA BAS ONGKIR</title>
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
	<script type="text/javascript" src="jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.js"></script>
</head>
<body>
<div class="container"  style="background-color: -webkit-box-shadow: 0 8px 31px 0 rgba(0,0,0,.1);
    -ms-box-shadow: 0 8px 31px 0 rgba(0,0,0,.1);
    -o-box-shadow: 0 8px 31px 0 rgba(0,0,0,.1);
    box-shadow: 0 8px 31px 0 rgba(0,0,0,.1);">
	<div class="container">
		<div class="row">
		<div class="twelve columns"><h1><center>ONGKIR PADUKA BAS</center></h1></div>
		<hr>
		<div class="row">
			<div class="six columns">
				<p align="right">
					Asal Propinsi <br>
					<select id="oriprovince" class="select2 six columns">
						<option>Propinsi</option>
					</select>
				</p>
			</div>
			<br>
			<div class="six columns" > Kota Asal<br>
			<select id="oricity" class="select2 six columns"><option>Kota</option></select>
			</div>
		</div>
		<div class="row">
			<div class="six columns" >
				<p align="right">
					Tujuan <br>
					<select id="desprovince" class="select2 six columns"><option>Provinsi</option></select>
				</p>
			</div>
			<div class="six columns" > <br>
			<select id="descity" class="select2 six columns"><option>Kota</option></select>
			</div>
			</div>
			<div class="row">
			<div class="two columns"><p align="right">Layanan</p>  </div>
			<div class="four columns">
				<p align="right">
					<select id="service" class="six columns">
							<option value="jne">JNE</option>
							<option value="pos">POS</option>
							<option value="tiki">TIKI</option>
					</select>
				</p>

			</div>
			<div class="four columns">
				<div class="six columns"><p align="left">Berat(/gram)</p></div>
				<div class="six columns">
					<input type="number" style="width: 100px;" id="berat" >
				</div>
			</div>
			</div>
			<div class="twelve columns"> <br>
				<p align="center"><button id="btncheck" class="twelve columns" style="background-color: #009688; color: white;" onclick="CekHarga()">cek harga</button></p>
			</div>
		
		<div class="row">
			<div class="twelve columns">Daftar Layanan  <br>
			</div>
			
		</div>
		<hr>
		<table class="twelve columns">
			<thead>
				
				<th>Service</th>
				<th>Nama Paket</th>
				<th>Lama Kirim</th>
				<th>Total Biaya</th>
			</thead>	
			<tbody id="resultsbox"></tbody>
		</table>
	<!-- 	<div id="loading"></div> -->
	</div>
	</div>

</div>
</body>
</html>

<script type="text/javascript">
	$('.select2').select2();
</script>