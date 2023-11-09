<?php
require_once ('connect.php');

$name = $_POST["name"];
$tel = $_POST["tel"];
$email = $_POST["email"];

$validation = 0;
$datarecord = 0;
$errors = array();
 
if (empty($name)) $errors[] = "Пожалуйста, введите ваше имя";
if (empty($tel)) $errors[] = "<br>Пожалуйста, введите ваш телефон";
if (strlen($tel) < 17 && strlen($tel) > 0) $errors[] = "<br>Пожалуйста, введите правильно ваш телефон";
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] =  "<br>Пожалуйста, введите правильный email";
 
if (!empty($errors)) {
  foreach ($errors as $error) {
    echo $error."\n";
  }
} else {
  $validation = 1;
}

if ($validation == 1) {

  $query = "SELECT name, email, phone, timestamp FROM applicationform 
    WHERE name = ? 
    AND email = ? 
    AND phone = ? 
    AND timestamp > DATE_SUB(NOW(), INTERVAL 5 MINUTE)"
  ;

  if ($stmt = $mysqli->prepare($query)) {

    $stmt->bind_param("sss", $name, $email, $tel);
    
    $stmt->execute();

    $result = $stmt->get_result();
    if (mysqli_num_rows($result) > 0) {
      echo "Заявка уходила в период 5 минут, форма не отправлена!";
      $mysqli->close();
    }else {
      $datarecord = 1;
    }
    $stmt->close();
  }
}

if ($datarecord == 1) {

  $insertQuery = "INSERT INTO applicationform (name, email, phone, timestamp) 
  VALUES (?, ?, ?, NOW())"; 

  if ($stmt = $mysqli->prepare($insertQuery)) {

    $nameinsert = $name; 
    $emailinsert = $email; 
    $telinsert = $tel; 
    $stmt->bind_param("sss", $nameinsert, $emailinsert, $telinsert);

    $stmt->execute();
    echo "valid";    
    $stmt->close();
  } else {
    echo "Ошибка при подготовке запроса: " . $mysqli->error;
  }
  $mysqli->close();
}