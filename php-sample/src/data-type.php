<?php

# 单行注释
// 单行注释
/* 多行注释*/

echo "---------布尔类型---------\n";
$bool = true;
var_dump($bool);
$bool = false;
var_dump($bool);

echo "---------整数类型---------\n";
$int = 100;
var_dump($int);
$bin = 0B1001;
var_dump($bin);
$oct = 01234;
var_dump($oct);
$hex = 0xcafe;
var_dump($hex);

echo "---------浮点类型---------\n";
$float = 3.1415;
var_dump($float);
$float = 1.63e6;
var_dump($float);

echo "---------字符串类型---------\n";
// 单引号字符串中内容不会被转义
$singleQuoteString = 'Hello world\n';
$doubleQuoteString = "$singleQuoteString\n";
$multiLineString = <<<EOD
This is a line.
$singleQuoteString is it.
\t\thehe
EOD;
var_dump($singleQuoteString);

echo "---------数组/Map类型---------\n";
$arr = array(1, 2, 3);
var_dump($arr);
var_dump($arr[2]);
$arr2 = array(1 => 1, 2 => 2, 3 => 3);
var_dump($arr2);