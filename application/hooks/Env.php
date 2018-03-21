<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

require_once getcwd() . "/lib/phpdotenv/Dotenv.php";
require_once getcwd() . "/lib/phpdotenv/Loader.php";
require_once getcwd() . "/lib/phpdotenv/Validator.php";

class Env 
{
	public function __construct()
	{
		
	}

	public function loadEnv() 
	{
		$dotenv = new Dotenv\Dotenv(getcwd());
		$dotenv->load();
	}
}
