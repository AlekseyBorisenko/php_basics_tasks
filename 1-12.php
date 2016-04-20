<?php
// 1-8 задание
$name = "Алексей";
$age = "23";
    echo "Меня зовут $name";
        echo "<br>";
    echo "Мне $age";
        echo "<br>";

    if ($age > 18 && $age < 59 ){
        echo "Мне еще работать и работать ;)";
    }elseif ($age > 59){
        echo "Вам пора на пенсию";
    }elseif ($age >0 && $age< 18){
        echo "Вам еще рано работать";
    }elseif ($age <0) {
    echo 'Неизвестный возраст';
    }elseif ($age == abs($age)) {
        echo 'Неизвестный возраст';
    }
echo "<br>";
// 9-12 задание
$day = "9";
    switch (date("$day")){
        case '1':
        case '2':
        case '3':
        case '4':
        case '5':
            echo "Это рабочий день";
            break;
        case '6':
        case '7':
        echo "Это выходной день";
        break;
        default:
            echo "Неизвестный день";
            break;
    }
?>