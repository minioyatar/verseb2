<?php
class Redirect{
	public static function to($location = null){
		if($location){
			if(is_numeric($location)){
				switch ($location) {
					case '400':
						header("HTTP/1.0 400 Bad Request");
						include '../includes/errors/400.php';
						exit();
						break;
					case '403':
						header("HTTP/1.0 403 Forbidden");
						include '../includes/errors/403.php';
						exit();
						break;
					case '404':
						header("HTTP/1.0 404 Not Found");
						include '../includes/errors/404.php';
						exit();
						break;
					case '500':
						header("HTTP/1.0 500 Internal Server Error");
						include '../includes/errors/500.php';
						exit();
						break;						
				}	
			}
			header('Location: ' . $location);
			exit();
		}
	}
}
?>