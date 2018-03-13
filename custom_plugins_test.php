<?php
	print("<h1>Plugins:</h1>");
	include_once "config.php";
	include_once "lib/classes/plugin_manager.php";
	$pluginManager = new core_plugin_manager();
	
	$mysqli = new mysqli("moodledev-20180205.cpxu0frrf8e8.us-east-1.rds.amazonaws.com", "moodle_admin", "wZGFUYXb8RWUfY76MB3G", "moodle_dev");
	if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
        }
	$array = $pluginManager->get_plugins();
	foreach( $array as $key1=>$val1 ) {
		print("<h3>$key1</h3>");
		$query = "select distinct plugin from mdl_config_plugins where plugin like '" . $key1 . "_%'";
		print("$query</br>");
		$result = $mysqli->query($query);
		$dbArray = array();
		while ($row = $result->fetch_assoc()){
			$dbArray[] = $row['plugin'];
		}
		//print("<h5>On Database</h5>");
		//print_r($dbArray);
		//print("<hr><h5>On Moodle</h5>");
		$mdlArray = array();
		foreach( $val1 as $key2=>$val2 ){
			$pluginName = $val2->{'type'} . '_' . $val2->{'name'};
			$mdlArray[] = $pluginName;
		}
		//print_r($mdlArray);
		//print("<hr><h5>Differences</h5>");
		$missingDb = array_diff($mdlArray, $dbArray);
		$missingMoodle = array_diff($dbArray, $mdlArray);
		if(sizeof($missingDb)>0) {
			print("<p style='color: red'>Missing from DataBase: ");
			print_r($missingDb);
			print("</p>");
		}
		else if(sizeof($missingMoodle)>0) {
			print("<p style='color: red'>Missing from Disc: ");
			print_r($missingMoodle);
			print("</p>");
		}
		else {
			print("Nothing Missing! :)");
		}
	}
	$mysqli->close();
?>
