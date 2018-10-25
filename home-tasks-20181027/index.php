<?php
date_default_timezone_set('Europe/Minsk');
session_start();

$_SESSION['text'] = "TEST";
echo $_SESSION['text'] . "<br>";
$_SESSION['test'] = "Hello!";
?>
<a href="hello.php">Перейти по ссылке</a><br>
<?php
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
    echo 'Вы еще не обновляли эту страницу ';
} else {
    $_SESSION['counter'] = $_SESSION['counter'] + 1 ;
    echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!'.'<br>';
}
if(isset($_REQUEST['country'])){
    $_SESSION['country'] = $_REQUEST['country'];
}
//var_dump($_SESSION);
?>

<form action="" method="POST">
    <input type="text" name= "country" placeholder="Введите страну">
    <input type="submit">
</form>

<?php
if (!isset($_SESSION['user_inter'])) $_SESSION['user_inter'] = date('Y-m-d H:i:s');
else $sec = time() - strtotime($_SESSION['user_inter']);
echo 'Вы заходили на сайт ' . $sec . ' секунд назад';
?>

