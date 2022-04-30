<?php 


    $servername = "localhost";
    $username = "azaman3";
    $password = "azaman3";
    $dbname = "azaman3";

    /**
     * PDO instance
     * @var PDO 
     */
    $pdo = null;

  
        // open database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $id = $_POST['id'];

        // Check connection
        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $sql = 'DELETE FROM cards
                WHERE id = $id';

      //close the database connection
     
  
        $conn->close();
   

?>