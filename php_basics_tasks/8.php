<?php
$age = 20;
if (( $age <= 59 ) && ($age > 18)){
    echo 'Вам еще работать и работать';
}
elseif ( $age > 59) {
    echo 'Вам пора на пенсию';
}
elseif ( $age < 0) {
    echo 'Неизвестный возраст';
}
else {echo 'Вам еще рано работать';
}