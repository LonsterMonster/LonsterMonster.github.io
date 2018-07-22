<?php
$Data_Check = function(){
		// 	Read JSON file
		//	$object = file_get_contents('./steam/Accounts.json');
		//	Decode JSON
		//	$json_data = json_decode($object);
		$filename = fopen("Users.json","a") or die("Unable to open file!");
		$obj = file_get_contents('Users.json');
		$jsonData = json_decode($obj);
		foreach($jsonData->Users as $item)
		{
			if ($item->$steamid != $steamid){
				$json_obj = array(
					"Users" => array(
						$steamid => array(
						"steamname" => $SteamName,
						"Credits" => $Credits,
						//"Items" => $Items,
									
						),
					),
				);
				$myJSON = json_encode($json_obj, JSON_PRETTY_PRINT);
				fwrite($filename, $myJSON);
			} else {
				
			}
		}
		fclose($filename);
	}
?>