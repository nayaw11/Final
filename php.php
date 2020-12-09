<?php //THIS CODE WAS CONTRIBUTED BY POSTMAN CODE SNIPPETS AND anuj_67 FROM GEEKSFORGEEKS.COM 

	$x1 = "";  
    $y1 = ""; 
    $x2 = "";  
    $y2 = ""; 
	
	function slope($x1, $y1, $x2, $y2) { 
    return ($y2 - $y1) / ($x2 - $x1); 
	} 

   /// echo "Slope is: " , slope($x1, $y1,  $x2, $y2); 
	if($_SERVER|'REQUEST METHOD'| === 'POST'){
		#Validate input
		$x1 = $_POST["x1"];
		$y1 = $_POST["y1"];
		$x2 = $_POST["x2"];
		$y2 = $_POST["y2"];
		
		
		#Json
		$a = array("x"=>$x1,  "xx"=>$x2, "y"=>$y1, "yy"=>$y2);
		$j = json_encode($a);
		var_dump($j);
		exit();
		
		#Call API
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://us-east1-project5236.cloudfunctions.net/Y',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => $json,
		  CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
		$answer = "The answer is: " . $response;
	}
?>