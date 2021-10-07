<html>
    <head>
        <title>Usuń</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="flex">
                <?php 
                    require_once("navbar.php");
                    require_once("connection.php"); 
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM notes WHERE id= $id;";
                    $result = $conn->query($sql);
                    $row = mysqli_fetch_row($result);
                    $title = $row[1];
                ?>
                <h1>USUNĄĆ NOTATKĘ <?php echo $title?>?</h1>
                    <form action="" method="post">
                        <input class="btn btn-danger" value="USUŃ" name="submit" type="submit">
                        <a class="btn btn-secondary" name="anuluj" href="index.php">ANULUJ</a>
                    </form>
                <?php
                    
                    $sql = "DELETE FROM `notes` WHERE `notes`.`id` = $id;";
                    if(isset($_POST['submit'])){
                        $conn->query($sql);
                        header('Location: index.php');
                        exit;
                    }
                    mysqli_close($conn);
                ?>
            </div>
        </div>
    </body>
</html>