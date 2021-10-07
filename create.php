<html>
    <head>
        <title>Stwórz</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php 
            require_once("navbar.php");
            require_once "connection.php";?>
            <h1>STWÓRZ NOTATKĘ</h1>
            <form action="" method="post">
                
            <div class="mb-3">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nazwa notatki:</label><br />

                        <input name="nazwa_notatki" value="" required/><br />

                        <label class="form-label">Priorytet:</label><br />

                        <input type="number" name="priorytet" min="1" max="5" required/><br />

                        Status:<br />

                        <input type="checkbox" name='status[]' value=""  name="status_notatki" /><br /><br />

                        <input class="btn btn-success" value="Stwórz" name="submit" type="submit">
                    </div>
                </form>
            </div>
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