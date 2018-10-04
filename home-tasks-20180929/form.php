
<?php
$form = [
    0 => [
        'tag' => 'div',
        'class' => 'form-group',
        'tag2' => 'label',
        'for' => 'exampleInputEmail1',
        'description' => 'Email address',
        'tag3' => 'input',
        'type' => 'email',
        'class2' => 'form-control',
        'id' => 'exampleInputEmail1',
        'placeholder' => 'Enter_Email',
    ],
    1 => [
        'tag' => 'div',
        'class' => 'form-group',
        'tag2' => 'label',
        'for' => 'exampleInputPassword1',
        'description' => 'Password',
        'tag3' => 'input',
        'type' => 'password',
        'class2' => 'form-control',
        'id' => 'exampleInputPassword1',
        'placeholder' => 'Password',
    ]
 ];
foreach ($form as $key){
     echo '<'.$key['tag'].' class = '.$key['class'].'>';
     echo '<'.$key['tag2'].' for = '.$key['for'].'>'.$key['description'].'</'.$key['tag2'].'>';
    echo '<'.$key['tag3'].' type = '.$key['type'].' class = '.$key['class2'].' id = '.$key['id'].' placeholder = '.$key['placeholder'].'>';
     echo  '</'.$key['tag'].'>';
}
    ?>

