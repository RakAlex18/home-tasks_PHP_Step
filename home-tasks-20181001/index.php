<h4>1. Задание 1 (Самостоятельная работа)
    Создать переменную с произвольным текстом (длиной >10символов). Провести проверку: если длина
    строки больше 10 символов, обрезать строку до 10 символов. С помощью функции заменить все символы
    "a-g" на пустоту.</h4>
<?php

    $text = "123a4b56d78f90hjkiajbugh";

        if (strlen($text)>10) {

            echo substr($text, 0, 10)."<br>";
        } else {
            echo 'Неверно'."<br>";
        }

    echo str_replace(['a', 'b', 'c', 'd', 'e', 'f', 'g'], ' ', $text)."<br>";

?>
<h4>2. Задание 2 (Самостоятельная работа)
    Задание:
    Взять Html разметку:
    <!--" <div class="refnamediv">
        <h1>htmlspecialchars</h1>
        <p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
            <span class="dc-title">Любой текст</span></p>
    </div>";-->
    Удалить все html теги. Вывести количество символом после фильтрации.</h4>

    <div class="refnamediv">
        <h1>htmlspecialchars</h1>
        <p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
            <span class="dc-title">Любой текст</span></p>
    </div>
<?php
    $tag = strip_tags('<div class="refnamediv">
        <h1>htmlspecialchars</h1>
        <p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
            <span class="dc-title">Любой текст!</span></p></div>');
    echo 'Количество символов после фильтрации - '.strlen($tag);
?>
<h4>3. Найти и заменить в строке "http://example.com/user/username" user на author; Вывести результат на экран</h4>
<?php
    $str = 'http://example.com/user/username';
    echo str_replace('user', 'author', $str);
?>
<h4>4. Отсортировать массив [1,22,45,3,23,45,6,76,55,4] по возрастанию;</h4>
<?php
    $arr = [1,22,45,3,23,45,6,76,55,4,69];
    sort($arr);
    echo '<pre>';
    var_dump ($arr);
?>

<h3>5. Преобразовать строку "Find me and say Hello Mike!" в массив;</h3>
<?php
    $stroka = 'Find me and say Hello Mike!';
    echo '<pre>';
    var_dump(explode(' ', $stroka));
?>

<h3>6. Посчитать, сколько букв "a" встречается в строке "Find me and say Hello Mike!";</h3>

<?php
    echo substr_count($stroka, 'a');
?>

<h3>7. Дан урл "http://example.com/name=Mike&lastname=Jackson&age=25", необходимо разбить и вытащить параметры и вывести на экран.
</h3>

<?php
    $url = 'http://example.com/name=Mike&lastname=Jackson&age=25';
    echo $param = str_replace('=', ' - ', str_replace('&', '; ', array_pop(explode('/', $url))));
?>