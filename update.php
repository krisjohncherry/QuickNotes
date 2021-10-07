<html>
    <head>
        <title>Edytuj</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            
            <?php 
                require_once("navbar.php");
                require_once("connection.php");
                
                $id = $_GET['id'];
                $sql = "SELECT * FROM notes WHERE id=" . $id;
                $result = $conn->query($sql);
                $row = mysqli_fetch_row($result);
                $id = $row[0];
                $title = $row[1];
                $priority = $row[2];
                $status = $row[3];
            ?>
            <form action="" method="post">
                <div class="col-md-6">
                    <h1>Edytuj notatkę <?php echo $title?></h1>
                    <label class="form-label">Nazwa notatki:</label><br />

                    <input name='nazwa_notatki' class="form-control" value="<?php echo $title; ?>"required><br/>
                </div>
                <label class="form-label">Priorytet:</label><br />
                <div class="col-md-1">
                    <input type='number' value="<?php echo $priority; ?>" class="form-control" name='priorytet' min='1' max='5' required/><br />
                </div>
                <label class="form-label">Nazwa notatki:</label><br />

                <?php 
                    if ($status == 1) {
                        echo '<input type="checkbox" class="form-check-input" name="status[]" checked value='.$status.'/>';
                    }else {
                        echo '<input type="checkbox" class="form-check-input" name="status[]" value='.$status.'/>';
                    }
                ?>

                <br />
                <br>
                <input class="btn btn-success" type="submit" value="Edytuj Notatkę" name="submit"  />
                
            </form>
            <?php
                if(isset($_POST['submit'])){
                    if(!empty($_POST['status'])) {
                        $status = true;
                    }else{
                        $status = false;
                    }
                }

                error_reporting(E_ERROR | E_PARSE);
                $note_name = $_REQUEST['nazwa_notatki'];
                $prio = $_REQUEST['priorytet'];
                $sql = "UPDATE `notes` SET `title` = '$note_name', `priority` = '$prio', `status` = '$status' WHERE `notes`.`id` = '$id';";
                $conn->query($sql);
            
                if(isset($_POST['submit'])){
                    header("Location: index.php");
                    exit;
                }
            ?>
        </div>
    </body>
</html>