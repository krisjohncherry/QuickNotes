<html>
    <head>
        <title>Szczegóły notatki</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php
                require_once("navbar.php");
                require_once("connection.php");
                if (isset($_GET['id'])) {
                    echo 'My ID is = ' . $_GET['id'];
                }
                
                function Jeden($licz){
                    $sql = "SELECT * FROM `notes` WHERE id = $licz;";
                    $result = $conn->query($sql);     
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<a href=#notatki><h3>";
                            echo "id: ".$row["id"]." - Title: " . $row["title"]." - Priority: ".$row["priority"]. " - Status: ". $row["status"]."<br>";
                            echo "</h3></a>";
                        } 
                    }else {
                        echo "0 results";
                    }
                    mysqli_close($conn);
                }
            ?>
        </div>
    </body>
</html>