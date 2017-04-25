<?php
if(isset($_POST['pwd']) AND $_POST['pwd'] != null){
	$pwd = strip_tags($_POST['pwd']);
	if($pwd == 'kangourou'){
		echo 'GG';
	}else{
		echo 'Mauvais mot de passe...';
	}
}else{
	echo 'Aucun mot de passe...';
}
echo "<pre>";
echo $_COOKIE['acceptedCookies'];
echo "</pre>";