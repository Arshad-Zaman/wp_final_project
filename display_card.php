<?php
 include  "php_scripts/create_all_tables.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propery Card</title>
</head>
<body>
    <?php
        $id = $_POST['id'];

        $sql ="SELECT * FROM cards
        WHERE id = $id";

        $results= mysqli_query($conn, $sql);
        $resultsCheck =mysqli_num_rows($results);
         $row = mysqli_fetch_assoc($results);
        if($resultsCheck > 0){
         ?>   
           <h1>   <?php   echo $row['location'];?> </h1>

            <?php   echo $row['img'];?>
            <?php   echo $row['price'];?>
            <?php   echo $row['floorplan'];?>
            <?php   echo $row['age'];?>
            <?php   echo $row['beds'];?> 
            <?php   echo $row['facilities'];?>
            <?php   echo $row['garden'];?>
            <?php   echo $row['parking'];?>  
            <?php   echo $row['proxFacil'];?> 
            <?php   echo $row['proxMR'];?>
            <?php   echo $row['tax'];?>

                
            

<?php

        }
    
    ?>
    
</body>
</html>