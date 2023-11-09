<?php require "db/connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validation.js" defer></script>
    <script src="js/phoneMask.js" defer></script>
    <script src="js/modal.js" defer></script>
    <script src="js/viewlist.js" defer></script>
    <script src="js/ajax.js" defer></script>
    <script src="js/clearInput.js" defer></script>
    <title>Form</title>
</head>

<body>
    <button id="openModalButton">Оставить заявку</button>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="container">
                <h3>Заявка на консультацию</h3>
                <form id="applicationForm" novalidate>
                    <input type="text" id="name" name="name" maxlength="40" placeholder="Ваше имя"><br>
                    <input type="tel" class="tel" id="tel" name="tel" placeholder="Ваш телефон"><br>
                    <input type="email" id="email" name="email" maxlength="40" placeholder="Ваш email"><br>
                    <input type="submit" class="submitBtn" value="Оставить заявку">
                </form>
                <div class="text">
                    <div class="phpValid">
                        <div id="phpValid"></div>
                    </div>
                </div>
            </div>
            <button type="button" class="close" id="closeModal"><img src="img/x.svg" alt=""></button>
        </div>
    </div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span id="popupText">Заявка успешно отправлена!</span>
            <button id="closePopup">Закрыть</button>
        </div>
    </div>
    <button id="getDataButton">Список заякок</button>
    <div id="list"></div>
</body>

</html>