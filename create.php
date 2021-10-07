<html>
    <head>
        <title>Stwórz</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php require_once "navbar.php";
            require_once "connection.php";
            ?>
            <h1>STWÓRZ NOTATKĘ</h1>
            <form action="" method="post">
                    <div class="col-md-6">
                        <label class="form-label">Nazwa notatki:</label><br />

                        <input name="nazwa_notatki" class="form-control"  value="" required/><br />
                    </div>
                        <label class="form-label">Priorytet:</label><br />
                    <div class="col-md-1">
                        <input type="number" name="priorytet" class="form-control" min="1" max="5" required/><br />
                    </div>
                        Status:<br />

                        <input type="checkbox" name='status[]' value="" class="form-check-input" name="status_notatki" /><br /><br />

                        <input class="btn btn-success" value="Stwórz" name="submit" type="submit">
                    
            </form>

            <?php
                error_reporting(E_ERROR | E_PARSE);
                
                if(isset($_POST['submit'])){
                    if(!empty($_POST['status'])) {
                            $status = true;
                    }else{
                        $status = false;
                    }
                }

                $note_name = $_REQUEST['nazwa_notatki'];
                $priority = $_REQUEST['priorytet'];

                if(isset($_POST['submit'])){
                    $sql = "INSERT INTO `notes` (`id`, `title`, `priority`, `status`) VALUES (NULL, '$note_name', '$priority', '$status');";
                    $conn->query($sql);
                    header("Location: index.php");
                    exit;
                }
            ?>
        </div>
    </body>
</html>