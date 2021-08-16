<?php

	$s1 = "gregr\n";
	echo strtoupper($s1);
	echo("<br>");
	?>
<?php
	$s2 = "rGHRHGERH\n";
	echo strtolower($s2);
	echo("<br>");
	?>
<?php
	echo ucfirst($s1);
	?>
<?php
	$s3 = "grg rghre hgre hre hre hreh\n";
	echo("<br>");
	echo(ucwords($s3));
	?>
<?php
	$s4 = "082307";
	echo("<br>");
	echo(implode(':',str_split($s4,2)));
	echo("<br>");
	?>
<?php

	$s5 = "The quick brown fox jumps over the lazy dog.";
	$s6 = "jumps";
	if(strpos($s5, $s6) !== false){
	    echo "Word Found!";
	} else{
	    echo "Word Not Found!";
	}

	?>
<?php
	echo("<br>");
	$int = 567;
	$res = strval($int);
	var_dump($res);
?>

<?php
	echo("<br>");
	$init = "www.example.com/public_html/index.php";
	$res = explode('/', $init);
	echo($res[count($res)-1]);
?>

<?php
	echo("<br>");
	$init = "rayy@example.com";
	$res = explode('@', $init);
	echo($res[0]);
?>

<?php
	echo("<br>");
	$init = "rayy@example.com";
	$res = substr($init,-3);
	echo($res);
?>

<?php
	echo("<br>");
	$nr1=65.45;
	$nr2=104.35;
	$nr3=$nr1+$nr2;
	echo(number_format($nr3, 2, '.', ''));
?>
<?php
	echo("<br>");
  	$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  	$nr = 6;
  	echo(substr(str_shuffle($data), 0, $nr));
?>

<?php
	echo("<br>");
  	$data = 'the quick brown fox jumps over the lazy dog.';
  	$pattern = "/the/";
  	$replacement = "That";
  	echo preg_replace($pattern, $replacement, $data, 1);
?>
<?php
	echo("<br>");
  	$data1 = "football";
  	$data2 = "footboll";
  	for($i=0;$i<min(strlen($data1),strlen($data2));$i++){
  		if($data1[$i]!=$data2[$i]){
  			echo("$data1[$i] $data2[$i]");
  		}
  	}
?>
<?php
	echo("<br>");
	$init = "www.example.com/public_html/index.php";
	$res = explode('/', $init);
	echo(explode('.',$res[count($res)-1])[0]);
?>


<?php
	echo("<br>");
	$init = 'z';
	$val =ord(strtolower($init))+1;
	if($val===123)
		$val=97; 
	echo(chr($val));
?>
<?php
	echo("<br>");
	$sub_string = 'rayy@';
	$str = 'rayy@example.com';
	echo(preg_replace("/$sub_string/", '', $str));
?>
<?php
	echo("<br>");
	$str = 'rayy@example.com';
	echo(bin2hex($str));
?>


<?php
	echo("<br>");
	$data = "The brown fox";
	$insert ="quick";
	$pos = 4;
	echo(substr_replace($data, $insert.' ', $pos, 0));
?>

<?php
	echo("<br>");
	$data = "The quick brown fox";
	echo(explode(' ',$data)[0]);
?>


<?php
	echo("<br>");
	$data = "000547023.24";
	echo(trim($data,'0'));
?>


<?php
	echo("<br>");
	$data = "The quick brown fox jumps over the lazy dog";
	echo str_replace("fox", " ", $data);
?>

<?php
	echo("<br>");
	$data = "The quick brown fox jumps over the lazy dog///";
	echo(trim($data,'/'));
?>
<?php
	echo("<br>");
	$data = "http://www.example.com/5478631";
	$res = explode('/', $data);
	echo(explode('.',$res[count($res)-1])[0]);
?>
<?php
	echo("<br>");
	$data = '\"\1+2/3*2:2-3/4*3';
	echo(str_replace(str_split('\\/:*?"<>|+-'), ' ', $data));
?>
<?php
	echo("<br>");
	$data = 'The quick brown fox jumps over the lazy dog';
	echo(implode(' ', array_slice(explode(' ', $data), 0, 5)));
?>

<?php
	echo("<br>");
	$data = "2,543.12";
	echo(str_replace( ',', '', $data));
?>

<?php
	echo("<br>");
	for($i=97;$i<97+26;$i++){
		echo(chr($i));
	}
?>
<?php
	echo("<br>");
	$d = 'A00';
	echo ++$d;
?>
