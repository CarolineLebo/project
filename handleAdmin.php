
<h1> Administrator</h1>
<?php // login.php
$db_hostname = 'localhost';
$db_database = 'c&tbags_db';
$db_username = 'projects';
$db_password = 'bags';
?>

<?php // sqltest.php

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database, $db_server)
or die("Unable to select database: " . mysql_error());

if (isset($_POST['if']) &&
isset($_POST['Name']) &&
isset($_POST['Description']) &&

isset($_POST['products']))
{
$id=$_POST['id'];
$name=$_POST['Name'];
$desc=$_POST['Description'];
$image=$_POST['password'];
$price=$_POST['price'];

if (isset($_POST['delete']) && $name != "")
{
$query = "DELETE FROM products WHERE id =$id";

if (!mysql_query($query, $db_server))
echo "DELETE failed: $query<br />" .
mysql_error() . "<br /><br />";
}
else
{
$query = "INSERT INTO products VALUES ('$name', '$desc', '$image', '$price')";

if (!mysql_query($query, $db_server))
echo "INSERT failed: $query<br />" .
mysql_error() . "<br /><br />";
}
}
echo '<form action="index.php" method="post"><pre>
Name <input type="text" name="Name" />
Description <input type="text" name="Description" />
Price <input type="text" name="price" />

<input type="submit" value="ADD RECORD" />
</pre></form>';

$query = "SELECT * FROM products";
$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());
$rows = mysql_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysql_fetch_row($result);
echo <<<_END
<pre>
Name $row[2];
Description $row[3];
Price $row[5];
 <img src="images/$row[4]">


</pre>
<form action="sqltest.php" method="post">
<input type="hidden" name="delete" value="yes" />
<input type="submit" value="DELETE RECORD" /></form>
_END;
}

mysql_close($db_server);

function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}
?>




