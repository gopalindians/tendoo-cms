<?php
Class POOSL
{
	public function __construct()
	{
		!function_exists('fopen') ? unable_to_execute() : false;
	}
	public function install($dir_name)
	{
		if(!is_dir($dir_name))
		{
			!is_dir($dir_name.'system/') 	? mkdir($dir_name.'system/')	: false;
			!is_dir($dir_name.'bases/') 	? mkdir($dir_name.'bases/')		: false;
			!is_dir($dir_name.'users/') 	? mkdir($dir_name.'users/')		: false;
			
		}
		return false;
	}
	private function set_default_users()
	{
	}
	// Errors Functions
	private function unable_to_execute()
	{
		echo '<h1>Unable to execute on this server</h1>';die();
	}
}