#!/usr/bin/env php
<?php

class Entity {
    public int $id;
    public string $name;
    
    public function __construct($name){
        $this->name = $name;
    }

    public function save(){
        
    }
    public static function index(){

    }
    public static function show($id){

    }
    public function load($id){

    }
    public function delete(){

    }

}