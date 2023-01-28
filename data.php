<?php 
    $query ="SELECT * FROM locations";
    $result = $cser->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>