<?php
	 function isAcceptedEmail($email) {
		  return preg_match('/^[0-9]{1}[a-z@.0-9]{9,14}$/i',$email) ;
	 }
	 
	 // Cara menggunakan fungsi di atas
	 if (isAcceptedEmail("3dara@gmail.com")) {
		 echo "Email Is Valid" ;
	 } else {
		 echo "Email Is Invalid" ;
	 }
	
	echo "\n";

	function isAcceptedPassowrd($password) {
		return preg_match('/^[#]{1}[a-z!0-9]{1,8}$/i',$password) ;
	}
	
	// Cara menggunakan fungsi di atas
	if (isAcceptedPassowrd("#words99!")) {
		echo "Passowrd Is Valid" ;
	} else {
		echo "Passowrd Is Invalid" ;
	}
?>