<?php 

	function curlRequest ($token, $query_string='' ){
		
		if($token){
			$code = $_GET['code'];
			$setopt_array = array(
				CURLOPT_URL => "https://api.dexcom.com/v1/oauth2/token",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => "client_secret=qNkDxTJzvzA1AChz&client_id=Uh7wYiK49aN0WT5V2JFMJyvfF6WwC87G&code=".$code."&grant_type=authorization_code&redirect_uri=http://localhost:3000/dexcomwebapp/home.php",
			  CURLOPT_HTTPHEADER => array(
			    "cache-control: no-cache",
			    "content-type: application/x-www-form-urlencoded"
			  ),
			);
		}
		else{
			$newDate = date("Y-m-d H:i:s", time()); 
			$formatedDate = date("c");
			$finalDate = gmdate("Y-m-d\TH:i:s");
			$date = gmdate("Y-m-d\TH:i:s", strtotime('-48 hours', time()));
			$showDate = "https://api.dexcom.com/v1/users/self/egvs?startDate=$date&endDate=$finalDate";

			$setopt_array = array(
				CURLOPT_URL => $showDate,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "authorization: Bearer ".$_SESSION['mytoken']
		  	),
			);
		}

		$curl = curl_init();
		curl_setopt_array($curl, $setopt_array);
		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);


		return json_decode($response);


	}



 ?>