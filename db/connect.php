<?php
$host = "localhost";
$username = "u2329574_user";
$password = "Gyi-9hG-CNQ-eBa";
$database = "u2329574_applications";

try {
    $mysqli = new mysqli($host, $username, $password, $database);
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_error) {
        throw new Exception("Ошибка подключения: " . $mysqli->connect_error);
    }
} catch (Exception $e) {
    die($e->getMessage());
}
?>
