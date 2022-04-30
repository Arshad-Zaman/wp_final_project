<?php
 include  "php_scripts/create_all_tables.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
</head>
<body>
<h2>Seller Dashboard</h2>

<input type="text" placeholder="Search..">

 <a href="create_card_form.php">
<p class="addButton">
  +
</p> </a> 


<div >
<?php
        $sql ="SELECT * FROM cards;";

        $results= mysqli_query($conn, $sql);
        $resultsCheck =mysqli_num_rows($results);
        ?>

        <?php
        if($resultsCheck > 0){
            while($row = mysqli_fetch_assoc($results)){
                ?>
         <a href="display_card.php">  
               <p class="cards">
                <p class="c_img"> <?php  echo $row['img']; ?></p>
                <p class="c_loc"> <?php echo $row['location'];?></p>
                <p class="c_price"><?php    echo $row['price'];?></p> 
                <button method="post" action="delete_cardDB.php">DELETE</button>
                <button onclick= "update.php">Update</button>
                </p></a>    
                <?php 
            }
        }
    ?>
    
    
    
   

</div> 
    
</body>
</html>


