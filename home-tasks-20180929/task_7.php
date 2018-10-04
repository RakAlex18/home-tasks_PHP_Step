<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя работа от 29 сентября</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style = "width: 1200px; margin: 0 auto">

<p>
    7. Задача. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru',
    то в переменную $arr запишем массив дней недели на русском языке,
    а если имеет значение 'en' – то на английском. Решите задачу через 2 if, через switch-case.
</p>

<?php
$lang = 'en';
    if($lang == 'ru'){
        $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
        echo '<pre>';
        var_dump ($arr);
    }
    if($lang == 'en'){
        $arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        echo '<pre>';
        var_dump ($arr);
    }
else {
    echo '<h2>Переменная lang не "ru" и не "en"</h2>';
}
switch ($lang) {
    case 'ru':
        $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
        break;
    case 'en':
        $arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        break;
}
echo '<pre>';
var_dump($arr);

$arr = [
    'ru'=>['пн', 'вт', 'ср','чт', 'пт', 'сб', 'вс'],
    'en'=>['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
    ];
echo '<pre>';
var_dump($arr[$lang]);
?>
</body>
</html>
