<?php
$name = trim(strip_tags($_POST["name"]));
$sex = trim(strip_tags($_POST["sex"]));
$email = trim(strip_tags($_POST["email"]));
$country = trim(strip_tags($_POST["country"]));
$password = trim(strip_tags($_POST["password"]));
$subject = "Регистрация на сайте avtorizac.html"
$msg = "Ваши данные формы регистрации:\n"."Имя:$name\n". "Пол:$sex\n". "Email:$email\n". "Страна:$country\n". "Пароль:$password\n".
$headers= "Content-type: text/plain ; charset=UTF-8"."\r\n";
$headers .="From: Влад <vlad.gromov201@yandex.ru>"."\r\n";
$headers .="Всс: vlad.gromov201@yandex.ru"."\r\n"
if (!empty($name) && !empty($sex) && !empty(email) && !empty(country) && !empty(password) && filter_var($email,FILTER_VALIDATE_EMAIL)){
    mail($email,$subject,$msg,$headers)
    echo "Спасибо!Вы успешно зарегистрировались."
}
?>