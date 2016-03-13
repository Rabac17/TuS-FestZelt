<?php

	function random_string($length) {
	    $key = '';
	    $keys = array_merge(range(0, 9), range('A', 'Z'));
	
	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }
	
	    return $key;
	}
	
	//var_dump($_POST);
	$tbl = $_POST['tischliste'];
	$uniqID = random_string(10);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="de" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<form action="skript.php" method="post">
	<input id="lbl1" type="text" name="tables" value="<?php "Ausgewählte Tische: " . print $tbl ; ?>" style="width: 483px"></input>
	<br><label id="Label1" style="height: 1.5em; width: 76px;">Vorname: </label> <input name="Text1" type="text" />
	<br><label id="Label2" style="height: 1.6em; width: 76px;">Nachname: </label> 
	<input name="Text2" type="text" /> <br>
	<label id="Label3" style="height: 1.5em; width: 76px;">Straße </label> 
	<input name="Text3" type="text" /> <br>
	<label id="Label4" style="height: 1.5em; width: 76px;">Stadt: </label> 
	<input name="Text4" type="text" /> <br>
	<label id="Label5" style="height: 1.5em; width: 76px;">PLZ: </label> 
	<input name="Text5" type="text" />
</form>

</body>

</html>