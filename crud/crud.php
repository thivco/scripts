#!/usr/bin/env php
<?php
// Script that behaves similarly to doctrine
// Create MVC files, adds entries and fetches the database

function main($argv, $argc){
	echo $argc . " arguments" . PHP_EOL;
	if($argv[2] == "entity"){
		generate_entity();
		generate_table();
		create_files();
		create_object();
	}
	
}

function generate_table($table_name){
	// Connect to PDO
	// Insert table with variables
}

function create_files(){
	// Create a file, entityname/Entityname.php => class

}

function class_instancer($entity_name){	
}

function generate_entity(){
	echo "Generating entity..." . PHP_EOL;

	$entity_fields=[];
	$entity_name = "";
	$entity_field_name = "";
	$entity_done = false;

	while($entity_name == ""){	
		$entity_name = readline("Entity name :" . PHP_EOL);
	}

	while(!$entity_done){
	
		while($entity_field_name == ""){	
			$entity_field_name = readline("Name of the field (type \"done\" to exit)");
		}
	
		if($entity_field_name == "done"){
			$entity_done = true;
		}
	
		$entity_field_type = readline("Define the type (string, str, int or integer)");
		array_push($entity_fields, $entity_field_name, $entity_field_type);	

		// Clear up variables

		$entity_field_type = "";
		$entity_field_name = "";
		$entity_field_type = "";
	}
		print_r($entity_fields);
}

main($argv, $argc);
