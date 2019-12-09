<html>
<body>
<h1>PHP Example -- Display Inventory Table Data</h1>
  <link rel="stylesheet" href="scripts.css">
<?php
require("fonts.html");
require("DBConfig.php");  //credentials

  echo "<p>connection OK<p>";  //progress tracking 

$sql="SELECT * FROM Inventory";  //store select statement


$qr = mysql_query($sql) or die(mysql_error()); 
        
  echo "<p>qr OK<p>";  //progress tracking 

echo "<table border='1'><tr>";  //set up table headers
echo "<th>ID</th>";
echo "<th>ITEM</th>";
echo "<th>QUANTITY</th>";
echo "<th>VALUE</th>";


$row_count=0;  //empty counter 

while ($data = mysql_fetch_array($qr))   //loop thru records
{
  $row_count=$row_count+1;   //and count rows

  $id=$data["ID"];          //store column items in variables
  $item=$data["ITEM"];
  $quan=$data["QUANTITY"];
  $val=$data["VALUE"];


  echo "<tr><td>" . $id . "</td>";  //display in table
  echo "<td>" .$item . "</td>";
  echo "<td>" .$quan . "</td>";
  echo "<td>" .$val . "</td>";
  echo "</tr>";
}
mysql_close();
echo "</table>";    
echo "<p>Row Count = ".$row_count;     //display final row count
echo "<p>Normal Termination -- ";     
echo date("D g:i:s A F d, Y",time());   //confirm with timestamp
?>
</body>
</html>
