<?php
include("config.php");
if(isset($_POST['Submit'])) {    
$loc_name = $_POST['loc_name'];
        
if(empty($loc_name)) 
echo "<font color='red'>Location Name field is empty.</font><br>";
else 
 { 
$result = mysqli_query($cser, "INSERT INTO locations(loc_name) VALUES('$loc_name')");
        
echo "<font color='green'>Data added successfully.</font>";
        
}
}
?>