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
	//ca sa ia in calcul si acel publisher ca altfel crapa la detail care e un array
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

<?php
	echo("</br>");
	$array = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,62, 62, 65, 64, 68, 73, 75, 79, 73);
	$average = array_sum($array)/count($array);
	echo($average);
	sort($array);
	echo("</br>");
	for($i=0;$i<5;$i++){
		echo($array[$i])." ";
	}

	echo("</br>");
	for($i=count($array)-5;$i<count($array);$i++){
		echo($array[$i])." ";
	}
?>

<?php
	echo("</br>");
	$array = array(5,3,1,3,8,7,4,1,1,3);
	function beadSortInsideFunction($array){
		$aux = $array;
		if(count($aux)==0)
			return array();
		else if(count($aux)==1)
			return array_chunk($aux[0], 1);
		array_unshift($array, NULL);
		$transpose = call_user_func_array('array_map', $array);
		return array_map('array_filter', $transpose);
	}
	function beadSort($array){
		foreach ($array as $i)
			$poles []= array_fill(0, $i, 1);
		return array_map('count', beadSortInsideFunction(beadSortInsideFunction($poles)));
	}
	echo '<pre>';print_r(beadSort($array));
?>

<?php
	echo("</br>");
	$array1 = array(array(77, 87), array(23, 45));
	$array2 = array("w3resource", "com");
	$i=0;
	foreach ($array1 as $key => $value) {
		$array1[$i][] = $array2[$i];
		$i++;
	}
	print_r($array1);
?>

<?php
	echo("</br>");
	$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
		"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
		"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
		"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
		"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;
	$max_key = max( array_keys( $ceu) );
	echo $max_key."\n";
?>