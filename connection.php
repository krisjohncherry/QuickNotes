<html>
    <head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $nazwaserwera = "localhost";
            $bazadanych = "projekt_php";
            $uzytkownik = "root";
            $haslo = "";

            //Tworzenie połaczenia
            $conn = mysqli_connect($nazwaserwera, $uzytkownik, $haslo, $bazadanych);

            //Sprawdź połączenie
            if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }
            echo "<div class='navbar fixed-bottom'>Connnected Successfuly</div>"."<br>";
        ?>
    </body>
</html>