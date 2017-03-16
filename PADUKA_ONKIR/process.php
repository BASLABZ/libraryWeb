<?php 

	include 'idmore.php';
	$idmoreRo = new idmoreRo();
	if (isset($_GET['act'])) {
		switch ($_GET['act']) {
			case 'showprovince':
				$province = $idmoreRo->showProvince();
				echo $province;
				break;
			case 'showcity':
				$idprovince = $_GET['province'];
				$city = $idmoreRo->showCity($idprovince);
				echo $city;
				break;
			
			default:
				
				break;
		}
	}
	
 ?>