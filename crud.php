<?php

function main($argv, $argc){
	$entity_fields=[];
	echo $argc . " arguments" . PHP_EOL;
	if($argv[2] == "entity"){
		echo "Generating entity..." . PHP_EOL;
		$entity_name = readline("Entity name :" . PHP_EOL);
		echo $entity_name;	
		$entity_done = false;
		$entity_field_name = "";
		while(!$entity_done){
			while($entity_field_name == ""){	
				$entity_field_name = readline("Name of the field (type \"done\" to exit)");
			}
			if($entity_field_name == "done"){
				$entity_done = true;
			}
			$entity_field_type = "";
			$entity_field_type = readline("Define the type (string, str, int or integer)");
			array_push($entity_fields, $entity_field_name, $entity_field_type);	
			$entity_field_name = "";
			$entity_field_type = "";
		}
			print_r($entity_fields);
	}
	else if($argv[2] == "controller"){
		echo "Generating controller" . PHP_EOL;
	}

}

main($argv, $argc);
