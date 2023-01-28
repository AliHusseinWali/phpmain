<?php
include("config.php");
include("data.php");
?>
<meta charset="utf-8">

<select name="loc_name">
   <option value="">اختر الموقع</option>
  <?php 
  foreach ($options as $x) {
    $loc_id=$x['loc_id'];
  ?>
    <option value= echo $loc_id;><?php echo $x['loc_name']; ?> </option>
    <?php 
    }
   ?>
</select>

