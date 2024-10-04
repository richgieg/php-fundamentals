<?php

$title = 'PHP Fundamentals';
$message = 'Welcome to ' . $title;
$year = 2024;

echo strlen($title);

$message2 = "Welcome to $title";

echo $message2;

$json = <<<JSON
{
    "hello": "$message2"
}
JSON;

echo $json;
