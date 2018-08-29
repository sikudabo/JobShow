<?php

/*Create an object using the clone method. The clone method will copy the object and we can 
set it as the value of another object. However, they will still be two seperate objects. The 
output of our program will prove that they are two seperate objects because the name property 
for obj1 and obj2 will vary. If we set obj2 = to obj1 without the clone method they would reference
the same object and changing the property of one object would automatically change the property of another */




$obj1 = new Obj;
$obj1->name = "Simeon";
$obj2 = clone $obj1; //If we didn't clone obj1, obj2 would reference the same object 
$obj2->name = "Sim";
echo "obj 1 name = $obj1->name <br>";
echo "obj 2 name = $obj2->name";



class Obj{
	public $name;
	}



?>
