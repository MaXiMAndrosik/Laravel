<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>
</head>

<body>

    <?php
    $db_server = 'localhost';
    $db_user = 'root';
    $db_password = 'password';
    $db_name = 'homework_base';

    try {
        $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM logs";

        $statement = $conn->prepare($sql);
        $statement->execute();

        $resultArray = $statement->fetchAll();

        echo "<div>";

        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Time</th>
                <th>Duration</th>
                <th>IP</th>
                <th>URL</th>
                <th>Method</th>
                <th>Input</th>
            </tr>";

        foreach ($resultArray as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['duration'] . "</td>";
            echo "<td>" . $row['ip'] . "</td>";
            echo "<td>" . $row['url'] . "</td>";
            echo "<td>" . $row['method'] . "</td>";
            echo "<td>" . $row['input'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        echo "<div>";
        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;

    ?>

</body>

</html>