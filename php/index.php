<?php

// Получаем данные с формы

$name = $_POST['name'];
$sername = $_POST['sername'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$company = $_POST['company'];
$country = $_POST['country'];
$comment = $_POST['comment'];

// Обрабатываем полученные данные

$name = htmlspecialchars($name);    // Преобразуем символы в сущности
$sername = htmlspecialchars($sername);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);
$company = htmlspecialchars($company);
$country = htmlspecialchars($country);
$comment = htmlspecialchars($comment);

$name = urldecode($name);   // Декодируем URL
$sername = urldecode($sername);
$tel = urldecode($tel);
$email = urldecode($email);
$company = urldecode($company);
$country = urldecode($country);
$comment = urldecode($comment);

$name = trim($name);    // Удаляем пробельные символы с обоих сторон
$sername = trim($sername);
$tel = trim($tel);
$email = trim($email);
$company = trim($company);
$country = trim($country);
$comment = trim($comment);

// Отправляем данные на почту

if (mail("cool.mara007@yandex.ru",
        "Новое письмо",
        "Имя: ".$name."\n".
        "Фамилия: ".$sername."\n".
        "Телефон: ".$tel."\n".
        "Почта: ".$email."\n".
        "Компания: ".$company."\n".
        "Страна: ".$country."\n".
        "Комментарий: ".$comment,
        "From: ")
) {
    echo('Письмо отправлено!');
} else {
    echo('Произошла ошибка!');
}