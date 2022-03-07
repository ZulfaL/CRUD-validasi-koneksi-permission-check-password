<h3>Posted Data :</h3>
<?php
	/*foreach($_POST as $key => $value)
	echo "($key) => ($value)<br/>";*/
	
	require 'validate.inc';
	$errors = array();
	validateName($errors, $_POST, 'surname');
	
	if($errors){
		echo "Errors:<br/>";
		foreach($errors as $field => $errors){
			echo "$field $errors<br/>";
		}
	} else {
		echo " Data OK";
	}
?>