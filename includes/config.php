<?php
define('DB_SERVER','localhost');
define('DB_USER','saathinf_info');
define('DB_PASS' ,'oPXt}#8e@?2I');
define('DB_NAME', 'saathinf_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>