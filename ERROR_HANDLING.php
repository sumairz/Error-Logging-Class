<?php

class ERROR_HANDLING {
	
	/* Class Variables */
	static private $error_instance;
	

	/* Class Methods */
	public function logError($error)
	{
		try
		{
			$log_file_path = "myerror.log";
			
			$msg = $error->getMessage();
			$line = $error->getLine();
			$file = $error->getFile();
			$date = date('Y-m-d');
			
			$error_msg = "Date: ". $date ."  --  Line: ". $line ."  --  File: ". $file ."  --  \r\n\r\n";
			  
			error_log($error_msg,3,$log_file_path);
		}
		catch(Exception $e)
		{
			echo "Application failed to handle the exception.";
		}
	}
	
	/*
	 * Singleton Pattern to create/get Error handling object once
	 */
	public static function singletonInstance()
	{
		if (!self::$error_instance) 
	    { 
	        self::$error_instance = new ERROR_HANDLING(); 
	    } 
	
	    return self::$error_instance; 
	}
	
}

?>