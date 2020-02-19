<?php

	require_once("user.php");
	require_once("db_manager.php");

	

	if (isset($_POST["info"])) {
		
		$info = json_decode($_POST["info"], true);
        $user = new User();
        foreach ($info as $key => $value) {
            $function = "Set".$key;
            $user->$function($value);
        }

        savePerson($user);
       	/*Usando showme rellena el div "banner"*/
		echo $user->ShowMeJSON();

	}


	
	
?>

