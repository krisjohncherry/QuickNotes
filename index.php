<html>
    <head>
        
        <title>Notatki - Index</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php require_once("navbar.php");?>
            <h1>Notatki - Index</h1>
            <div class="flex">
                <?php 
                        
                    require_once("read.php");
                    require_once("footer.php");
                        $sql = "SELECT * FROM `notes`;";
                        $result = $conn->query($sql);  
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<div class='card mb-1' style='max=width: 60rem;'><div class='row row-cols-0 row-cols-md-2 g-4'><div class='col-md-4'><img src='images/sticky-note-regular.png' class='img-fluid rounded-start' style='max-width:13rem;'></div>";
                                echo "<div class='col-md-8'><div class='card-body'>";
                                echo "<h5 class='card-header'>".$row['title']."</h5>";
                                echo "<div class='card-footer'><a class='btn btn-success mb-2' href='read.php?id=".$row['id']."'>Kliknij</a><br><a class='btn btn-warning mb-2'href='update.php?id=".$row['id']."'>Edytuj</a><br><a class='btn btn-danger mb-2' href='delete.php?id=".$row['id']."'>Usuń</a></div></div></div></div></div>";
                                } 
                            }else {
                                echo "0 results";
                            }
                        mysqli_close($conn);
                    ?>
            </div>
        </div>
                              
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <?php require_once("connection.php"); ?>
    
  </body>
</html>