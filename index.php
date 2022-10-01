<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova DB 22</title>
</head>
<body>
    <h1>Prova DB 22</h1>
    <?php
        echo "Inizio Connessione...";

        $db = new mysqli("remotemysql.com","q4ww5u34Sw","M0P7mMBrVq","q4ww5u34Sw");
        if($db->connect_errno != 0)
        {
            echo "Non sei connesso.";
        }
        $query = "select nome from users where id = 1";
        $ris = $db-> query($query);
        while($r = $ris->fetch_row())
        {
            echo "User id 1 nome: ".$r[0];
        }
    ?>
</body>
</html>