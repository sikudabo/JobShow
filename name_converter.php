<?php


$currentUser = new User("Simeon", "pass");
print_r($currentUser);
echo "<br>";
$currentUser->save_user();



class User{

	public $username, $password;

	function User($username, $password){
		$this->username = $username;
		$this->password = $password;
		}

	function save_user(){
		echo "User $this->username is saved. Their password is $this->password";
		}
	}



?>
