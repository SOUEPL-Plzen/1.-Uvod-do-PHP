<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php" ?>
    
    <main>
        <h1>Zde je content</h1>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "priprava_test";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM žák";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row

                echo "<table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Jméno</th>
                                <th>Příjmení</th>
                                <th>Třída</th>
                                <th>Věk</th>
                            </tr>
                        </thead>
                        <tbody>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>".
                        "<td>" . $row["id"] . "</td>" .
                        "<td>" . $row["Jméno"] . "</td>" .
                        "<td>" . $row["Příjmení"] . "</td>" .
                        "<td>" . $row["Třída"] . "</td>" .
                        "<td>" . $row["Věk"] . "</td>" .
                    "<tr>";
                }
                echo "</tbody>
                        </table>";
            } else {
            echo "0 results";
            }
            $conn->close();
        ?>
    </main>

    <style>
        table, tr, td, th, thead{
            border: 1px solid black
        }
    </style>
</body>
</html>