<?php

$link = mysql_connect("localhost","root", "");
mysql_select_db("brimelow_store");

$query = 'SELECT * FROM products';
$results = mysql_query($query);

echo "<?xml version=\"1.0\"?>\n";
echo "<products>\n";

while($line = mysql_fetch_assoc($results)){
	echo "<item>" . $line["product"] . "</item>\n";
}	

echo "</products>\n";

mysql_close($link);	

?>