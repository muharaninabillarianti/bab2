<?php
header("Content-type:text/xml");
mysql_connect("localhost","root","");
$result=mysql("bab2","select LastName,FirstName from Employees order by LastName,FirstName");

$i=0;
echo'<data_mahasiswa>';
while ($i < mysql_numrows($result)){
			$fields=mysql_fetch_row($result);
			echo"<nama>$fields[1] $fields[0]</nama>\r\n";
			$i++;
}
echo'</data_mahasiswa>';
mysql_close();
?>