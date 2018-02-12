<?php

echo "Hello World";
echo"<hr>for loop<hr>";


$var1;
$var2;

for($var=0;$var<10;$var++){
	echo"Number : $var<br>";
}

$music = array("Megadeth","Pink Floyd","Aurora");
$musiclength = count($music);

echo"<hr>";
for($var=0;$var<$musiclength;$var++){
	echo $music[$var];
	echo "<br>";
}


echo "<hr>foreach<hr>";

foreach($music as $value){
	echo "$value<br>";
}

echo "<hr>While<hr>";
$var7=0;
while($var7<10){
	echo"$var7";
	echo"<br>";
	
	$var7++;
}

echo "<hr>Do while<hr>";

$var8 = 0;
do{
	echo "$var8";
	echo "<br>";
	$var8++;
}
while($var8<10);

echo "<hr>SwitchCase Using Rand Function<hr>";

$var9 = rand(0,5);

switch($var9){
	case "1":
	 echo "1";
	 break;
	
	case "2":
	 echo "2";
	 break;
	
	case "3":
	 echo "3";
	 break;
	 
	case "4":
	 echo "4";
	 break;
	
	case "4":
	 echo "4";
	 break;
	 
	case "5":
	 echo "5";
	 break;
	
	default:
	 echo "You Know Nothing Superman";
	
}

echo "<hr>Function Practise<hr>";

function sum(){
	
	$var1 = (rand(0,6));
	$var2 = (rand(10,16));
	
	$sum = $var1 + $var2;
	
	echo "$sum";
	
}

sum();


?>