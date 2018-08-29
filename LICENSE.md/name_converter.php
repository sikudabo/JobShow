<?php
/*This example code will store the name of a person, convert the name to all lowercase, then make the first letter an uppercase. 
The purpose is to create a function that will return a fully formatted First name, Middle name and Last name*/


//Echo the function below
echo formatName("simeon", "adele", "ikudabo");

function formatName($firstName, $middleName, $lastName){
			//function contains the first, middle and last name parameters

			//Convert names to lower case and then convert first letter to uppercase
			$fName = ucfirst(strtolower($firstName));
			$mName = ucfirst(strtolower($middleName));
			$lName = ucfirst(strtolower($lastName));
			
			return $fName . " " . $mName . " " . $lName;
			}

?>
