<?php 

		@session_start();
		
		if(isset($_SESSION['counter'])){
			
			$_SESSION['counter']+= 1;
     
			
			}else {
				
				$_SESSION['counter']=1;
				}
		
            
			echo $_SESSION['counter'];

?>

<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>