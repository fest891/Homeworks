<?php
$s = 100;
$t = 2;

define( 'WAY', 'km' );
define( 'TIME', 'hour(s)' );

$v = $s/$t;
$v1 = ($s*1000)/($t*3600);

echo 'Скорость равна ' . $v . ' km/hour' . '</br>';
echo 'Скорость равна ' . round ($v1, 2) . ' m/s';