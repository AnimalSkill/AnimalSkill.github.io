<?php

$recepient = "max.boyka@mail.ru";
$sitename = "Свой плиточник";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$message = "Имя: $name \nТелефон: $phone;

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");