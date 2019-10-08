<?php

public function CrypterPass($p){

	$passHashed = "";
	password_hash( $p , PASSWORD_BCRYPT);
	return $passHashed;
}



?> 