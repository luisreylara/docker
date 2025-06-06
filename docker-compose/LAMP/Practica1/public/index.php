<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dcoker  LAMP</title>
</head>
<body>
    <div>
        <?php
                echo '<h1>Usuarios del sistema</h1>';
                $conn = mysqli_connect('db','root','rootpa');
                $database = mysqli_select_db($conn, 'db_ejm1');
                $query = 'SELECT * FROM Usuarios';
                $result = mysqli_query($conn, $query);
                echo '<table class="table table-striped">';
                echo '<thead><tr><th>ID</th><th>Nombre del Usuario</th></tr></thead>';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    foreach($value as $element){
                        echo '<td>'.$element.'</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
                $result->close();
                mysqli_close($conn);
            ?>
    </div>
</body>
</html>
