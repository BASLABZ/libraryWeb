<?php 

		/**
		* 
		*/
		class IdmoreRO
		{
			
			function __construct()
			{}
			// menampilkan data propinsi
			public function showProvince()
			{
				$curl = curl_init();
				curl_setopt_array($curl, array(
												 CURLOPT_URL => "http://rajaongkir.com/api/starter/province",
												 CURLOPT_RETURNTRANSFER => true,
												 CURLOPT_ENCODING => "",
												 CURLOPT_MAXREDIRS => 10,
												 CURLOPT_TIMEOUT => 30,
												 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
												 CURLOPT_CUSTOMREQUEST => "GET",
												 CURLOPT_HTTPHEADER => array(
												 "key:0b5c9a2fdbba0c5ca4f720d225dac4b1"
												 ),
												));
					

					$response = curl_exec($curl);
					$err = curl_error($curl);
					 
					curl_close($curl);
					 
					if ($err) {
					 	$result  = 'error';
					 	return 'error';
					} else {
					 	return $response;
					 
					}

			}
			// menampilkan data kota berdasarkan propinsi/kota
			public function showCity($province)
			{
				$curl = curl_init();
				curl_setopt_array($curl, array(
												 CURLOPT_URL => "http://rajaongkir.com/api/starter/city?province=$province",
												 CURLOPT_RETURNTRANSFER => true,
												 CURLOPT_ENCODING => "",
												 CURLOPT_MAXREDIRS => 10,
												 CURLOPT_TIMEOUT => 30,
												 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
												 CURLOPT_CUSTOMREQUEST => "GET",
												 CURLOPT_HTTPHEADER => array(
												 "key:0b5c9a2fdbba0c5ca4f720d225dac4b1"
												 ),
												));
					

					$response = curl_exec($curl);
					$err = curl_error($curl);
					 
					curl_close($curl);
					 
					if ($err) {
					 	$result  = 'error';
					 	return 'error';
					} else {
					 	return $response;
					 
					}

			}
			// hitung ongkir
			public function hitungOngkir($origin,$destination,$weight,$courier)
			{
				
			}
		}
 ?>