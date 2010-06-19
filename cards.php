<?

/*class cards {
        function getcard($getcard) {
                
                $db_name = "flash";
                $connection = @mysql_connect("localhost", "root", "") or die("Cound not connect to database");
                mysql_select_db($db_name, $connection) or die("Count not select database");
                $query = "SELECT * FROM videos";
                $q_result = mysql_query($query);
                return mysql_fetch_row($q_result);
                
        }
}
*/

//The value of $x would be printed to the screen but the SWF would not read the data
$x = "abc";

//The value of $x would be printed to the screen and because of the prefix 'myVar=', the SWF will //interpret this as being the intended value for the variable myVar in the SWF
print "txtText=$x";

?>