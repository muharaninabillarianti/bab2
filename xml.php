<?php
header("Content-type:text/xml");
mysql_connect("127.0.0.1","root","");
$result=mysql("bab2","select LastName,FirstName from Employees order by LastName,FirstName");

$i=0;
echo'<data_mahasiswa>';
while ($i < mysql_numrows($result)){
			$field=mysql_fetch_row($result);
			echo"<nama>$field[1]$fields[0]</nama>\r\n";
			$i++;
}
echo'</data_mahasiswa>';
mysql_close();
?>