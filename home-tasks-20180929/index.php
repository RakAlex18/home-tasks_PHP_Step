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
<body style = "width: 1200px">
<p>
    1. При помощи цикла for выведите все нечетные числа от 1 до 50
</p>

<?php

for ($i = 1; $i <=50; $i = $i+2){
    echo $i.'<br>';
}
?>
<p>
    2. При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
</p>

<ul>
    <?php
    $i = 1;
    while ($i <=10 ):?>
        <li> Категория <?=$i?> </li>
        <?php
        $i++;
    endwhile;

    ?>
</ul>
<p>
    3. Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while);*/
</p>
<?php
$posts[]  = "Заголовок";
$posts[]  = "Дата";
$posts[]  = "Имя автора";
$posts[]  = "img/bibl.png";
$i=0;
while($i<count($posts)){?>
    <h1><?=$posts[$i]?></h1>
    <p><?=$posts[++$i]?></p>
    <h2><?=$posts[++$i]?></h2>
    <p>
        <img src="<?=$posts[++$i]?>" alt="альтернативный текст">
    </p>

    <?php
$i++;
}
?>
<p>
    3. Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while);*/
</p>
<?php
$posts = [
    0 => [
        'title' => 'List-based media object 1',
        'slug' => 'list-based-media',
        'author' => 'Author 1',
        'img' => 'img/bibl.png'
    ],
    1 => [
        'title' => 'List-based media object 2',
        'author' => 'Author 2',
        'img' => 'img/bibl.png'
    ],
    2 => [
        'title' => 'List-based media object 3',
        'author' => 'Author 3',
        'img' => 'img/bibl.png'
    ]
];
?>
<div class="container">

    <ul class="list-unstyled">
        <?php
        $i = 0;
        while ($i < count($posts)): ?>
            <li class="media">
                <p><?= $posts[$i]['author'];?></p>
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><a href="<?= $posts[$i]['slug'];?>"><?= $posts[$i]['title'];?></a></h5>
                    <p><?= date('Y-m-d');?></p>
                    <img src="<?= $posts[$i]['img'];?>" alt="">
                    <p><a href="<?= $posts[$i]['slug'];?>">Readmore</a></p>
                </div>
            </li>

            <?php  $i++;
        endwhile;
        ?>
    </ul>
</div>
<p>
    4. При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
</p>
<?php
$arr = ["Категория 1", "Категория 2", "Категория 3", "Категория 4"];
foreach ($arr as $elem) {?>
<ul>
   <li class="list-group-item list-group-item-success">
       <?php echo $elem.'<br>';?>
   </li>
</ul>
<?php
}
?>
<p>
    5.При помощи цикла foreach вывести форму с определенными полями.
<!--    https://html5book.ru/sozdanie-html-form/-->
<!--    http://htmlbook.ru/html/input -->
</p>
<?php
$form = [
    div => [
        'class' => 'form-group',
        'tag' => 'label',
        'for' => 'exampleInputEmail1',
        'description' => 'Email address',
        'tag2' => 'input',
        'type' => 'email',
        'class2' => 'form-control',
        'id' => 'exampleInputEmail1',
        'placeholder' => 'Enter email',
    ],
    div => [
        'class' => 'form-group',
        'tag' => 'label',
        'for' => 'exampleInputPassword1',
        'description' => 'Password',
        'tag2' => 'input',
        'type' => 'password',
        'class2' => 'form-control',
        'id' => 'exampleInputPassword1',
        'placeholder' => 'Password',
    ],
    button => [
        'class' => 'btn btn-primary',
        'type' => 'submit',
        'description' => 'Submit'
    ]
];
foreach ($form as $key => $elem){?>
<form>
    <?php
    echo '<'.$key.'>';
    ?>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


    </body>
</html>
