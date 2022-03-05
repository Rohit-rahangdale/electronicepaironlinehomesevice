<?php

include'db.php';
$id =$_GET['id'];
$deletequery = "delete from repairman where id=$id";
$query = mysqli_query($con, $deletequery);
if($query){
  
    ?>
<script>

alert('deleted  Successful');


</script>


<?php
header('location:update.php');

}else{

    ?>

    <script>
    
    alert('  deleted not Successfull');
    </script>
    <?php

}


?>

