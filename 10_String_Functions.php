<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    #length of string
    #strlrn() functioin
    $str = "This is string";
    echo $str;
    $length = strlen($str);
    echo $length;
    #cincatnation of string
    # . dot is used to cincanate string
    $str1 = "This is string one" ;
    echo $str1 . "This is string 2" . "This is string 3";
    echo "This is word count in string is " . str_word_count($str1);
    echo strrev($str1) . "<br>";
    echo strpos($str1 , "one");
    echo"<br>";
