<?php

include 'functions.php';

// Connect
$conn = connetti_db();

// Check connection
if ($conn && $conn->connect_error) {
    // si sono verificati errori di connessione
    echo "Connection failed: " . $conn->connect_error;
    exit();
}

$sql = "SELECT room_number, floor FROM stanze";
$result = $conn->query($sql);
$conn->close();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Prima connessione al DB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Lista stanze hotel</h1>
                    <?php
                    if ($result && $result->num_rows > 0) { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Room Number</th>
                                    <th>Floor</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // output data of each row
                                while($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $row['room_number']; ?></td>
                                        <td><?php echo $row['floor']; ?></td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                        <?php
                    } elseif ($result) { ?>
                        <p>Non esiste nessuna stanza</p>
                        <?php
                    } else { ?>
                        <p>Si è verificato un errore</p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
