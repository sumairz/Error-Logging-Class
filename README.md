Error-Logging-Class
===================

A simple php class for error logging using singleton pattern.

Example code

<code>
    try	
	{		
		/* TODO */	
	}		
	catch(Exception $e)		
	{			
		$error = ERROR_HANDLING::singletonInstance();			
		$error->logError($e);		
	}
</code>
