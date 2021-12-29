<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<?php
            if(isset($_GET["user"])){
                if(file_exists["users-data.json"]){
                    $users_data = file_get_contents("users-data.json");
                    $users_data = json_decode($users_data, true);
                    
                    $username = $_GET["user"];
                    if(array_key_exists($username, $users_data)){
                        $user_data = $users_data[$username];

                    }
                }
            }else{

            }
			require "includes/head.include.php";
			require "includes/body.include.php";
	?>
</html>