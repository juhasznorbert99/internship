<?php
	echo("</br>");
	$color = array('white', 'green', 'red', 'blue', 'black');
	echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
?>
<?php
	echo("</br>");
	$color = array('white', 'green', 'red');
	foreach ($color as $key => $value) {
		echo($value).", ";
	}

?>

<?php
	echo("</br>");
	$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
	sort($ceu) ;
	foreach($ceu as $key => $value)
	{
		echo "$key -> $value"."\n";
	}

?>

<?php
	echo("</br>");
	$x = array(1, 2, 3, 4, 5);
	unset($x[3]);
	$x = array_values($x);
	//sau  \array_splice($x, 3, 1); unde 3 ii ce element
	var_dump($x);

?>

<?php
	echo("</br>");
	$color = array(4 => 'white', 6 => 'green', 11=> 'red');
	echo(array_values($color)[0]);
?>

<?php
	function recursive($value,$key)
	{
		echo "$key : $value"."\n";
		echo("</br>");
	}
	echo("</br>");
	$json = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';
	$aux = json_decode($json,true);
	array_walk_recursive($aux,"recursive");
?>

<?php
	echo("</br>");
	$data = array(1,2,3,4,5);
	array_splice($data, 3, 0, '$');
	foreach ($data as $key => $value) {
		echo "$key : $value"."</br>";
	} 
?>
<?php
	$data=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
	
	echo("</br>");
	asort($data);
	foreach ($data as $key => $value) {
		echo "$key : $value"."</br>";
	} 

	echo("</br>");
	ksort($data);
	foreach ($data as $key => $value) {
		echo "$key : $value"."</br>";
	}

	echo("</br>");
	arsort($data);
	foreach ($data as $key => $value) {
		echo "$key : $value"."</br>";
	} 

	echo("</br>");
	krsort($data);
	foreach ($data as $key => $value) {
		echo "$key : $value"."</br>";
	} 
?>
