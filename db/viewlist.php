<?php
require_once ('connect.php');

$query = "SELECT name, email, phone, timestamp FROM applicationform";
$mysqli->set_charset("utf8");
$result = $mysqli->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Имя: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Телефон: " . $row['phone'] . "<br>";
        echo "Дата: " . $row['timestamp'] . "<br><br>";
    }

    $result->close();
} else {
    echo "Ошибка при выполнении запроса: " . $mysqli->error;
}

$mysqli->close();
?>
