<?php
    $conn = mysqli_connect('localhost','root','','mysql',3308);
    mysqli_select_db($conn,'mysql');
    
    if($conn)
    {

$result = mysql_query("select * from emp");

echo "<table border='1'>

<tr>

<th>EmpId</th>

<th>Firstname</th>

<th>Salary</th>

</tr>";


while($row = mysql_fetch_array($result))

{

echo "<tr>";

echo "<td>" . $row['id'] . "</td>";

echo "<td>" . $row['name'] . "</td>";

echo "<td>" . $row['salary'] . "</td>";

echo "</tr>";

}

echo "</table>";


print "<h2>CREATE MySQL Trigger In PHP</h2>";

$sql = "CREATE TRIGGER MysqlTrigger BEFORE UPDATE ON emp FOR EACH ROW SET NEW.name=UPPER(NEW.name);";

mysql_query($sql,$con);


print "<h2>MySQL: Update Statement</h2>";

$qry = mysql_query("UPDATE emp SET name='ram' where id=2");

echo "Table has been updated.";

mysql_query($qry,$con);



print "<h2>MySQL: Effect of Trigger</h2>";

$result = mysql_query("select * from emp");

echo "<table border='1'>

<tr>

<th>EmpId</th>

<th>Firstname</th>

<th>Salary</th>

</tr>";

while($row = mysql_fetch_array($result))

{


echo "<tr>";

echo "<td>" . $row['id'] . "</td>";

echo "<td>" . $row['name'] . "</td>";

echo "<td>" . $row['salary'] . "</td>";

echo "</tr>";

}

echo "</table>";
    }

mysql_close($con);

?>      